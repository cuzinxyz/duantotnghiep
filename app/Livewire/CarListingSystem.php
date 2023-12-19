<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\Brand;
use Livewire\Component;
use App\Models\Wishlist;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Kjmtrue\VietnamZone\Models\Province;

class CarListingSystem extends Component
{
    use WithPagination;

    public $make;
    public $brands;
    public $locations;
    public $updateBrands = [];
    public $updateLocations = [];
    public $minYear;
    public $maxYear;
    public $sortPrice = "time";
    public $minPrice;
    public $maxPrice;
    public $queryMax;
    public $queryMin;

    public function mount()
    {
        $this->brands = Brand::all();
        $this->locations = Province::all();
        $this->maxPrice = Car::where('status', 1)->max('price');
        $this->minPrice = Car::where('status', 1)->min('price');
    }

    #[On('filterPrices')]
    public function filterPrices($max, $min)
    {
        $this->queryMin = $min;
        $this->queryMax = $max;
    }

    #[Layout('components.partials.layout-client')]
    public function render()
    {
        ########################################################################
        $carIds = DB::table('purchased_service')
            ->where('expired_date', '>=', Carbon::now())
            ->whereNotNull('car_id')
            ->select('car_id')
            ->get()
            ->pluck('car_id')
            ->flatMap(function ($carId) {
                return explode(',', $carId);
            })
            ->filter()
            ->unique()
            ->values()
            ->toArray();

        $recommendCars = Car::whereIn('id', $carIds)
            ->where('status', 1)
            ->whereNull('salon_id')
            ->get();
        // dd($recommendCars);

        $recommendCars = $recommendCars->map(function ($car) {
            $car['is_vip'] = true;

            return $car;
        });

        $id = $recommendCars->pluck('id');

        $normalCars = Car::whereNotIn('id', $id)
            ->whereNull('salon_id')
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $cars = new \Illuminate\Database\Eloquent\Collection;
        $cars = $cars->merge($recommendCars);
        $cars = $cars->merge($normalCars);

        $cars = $cars->sort(function ($a, $b) {
            if ($a['is_vip'] && $b['is_vip']) {
                return $b['created_at'] <=> $a['created_at'];
            }

            return $b['is_vip'] <=> $a['is_vip'];
        });
        ################################################################
        # lấy ra dsach xe ok roài, nhưng k chạy đc filter

        # code cũ
        $carQuery = Car::query()
            ->whereNull('salon_id')
            ->where('status', 1);

        if (!empty($this->make)) {
            $carQuery->where('title', 'LIKE', '%' . $this->make . '%');
        }

        if (!empty($this->updateBrands)) {
            $carQuery->whereIn('brand_id', $this->updateBrands);
        }

        if (!empty($this->updateLocations)) {
            $carQuery->whereIn('city_id', $this->updateLocations);
        }

        if (!empty($this->minYear && $this->maxYear)) {
            $carQuery->whereBetween('car_info->year_of_manufacture', [$this->minYear, $this->maxYear]);
        }

        if (!empty($this->queryMin && $this->queryMax)) {
            $carQuery->whereBetween('price', [$this->queryMin, $this->queryMax]);
        }

        if (!empty($this->sortPrice)) {
            if ($this->sortPrice == 1) {
                $carQuery->orderBy('price', 'asc');
            } elseif ($this->sortPrice == 2) {
                $carQuery->orderBy('price', 'desc');
            } else {
                $carQuery->orderBy('created_at', 'desc');
            }
        }

        $carCount = $carQuery->count();


        return view('livewire.car-listing-system', [
            'cars' => $carQuery->paginate(10),
            'carCount' => $carCount,
        ]);
    }
}
