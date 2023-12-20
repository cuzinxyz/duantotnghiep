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

    public $amount = 6;

    public function load()
    {
        $this->amount = $this->amount + 6;
    }
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


    public function filterCar() {
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

        return $carQuery->get();
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

        $carsVip = new \Illuminate\Database\Eloquent\Collection;
        $carsVip = $carsVip->merge($recommendCars);
        $carsVip = $carsVip->merge($normalCars);

        $carsVip = $carsVip->sort(function ($a, $b) {
            if ($a['is_vip'] && $b['is_vip']) {
                return $b['created_at'] <=> $a['created_at'];
            }

            return $b['is_vip'] <=> $a['is_vip'];
        });
        ################################################################
        # lấy ra dsach xe ok roài, nhưng k chạy đc filter

        
        $cars = $carsVip;
        if(
            $this->make || 
            $this->updateBrands || 
            $this->updateLocations ||
            $this->minYear ||
            $this->maxYear ||
            $this->queryMin ||
            $this->queryMax ||
            $this->sortPrice != 'time'
        ) {
            $cars = $this->filterCar();
        }

        $carCount = $cars->count();


        return view('livewire.car-listing-system', [
            'cars' => $cars->take($this->amount),
            'carCount' => $carCount,
        ]);
    }
}
