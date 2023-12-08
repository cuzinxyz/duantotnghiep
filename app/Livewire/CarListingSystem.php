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
    public $sortPrice;
    public $minPrice;
    public $maxPrice;
    public $queryMax;
    public $queryMin;

    public function mount()
    {
        $this->brands = Brand::all();
        $this->locations = Province::all();
        $this->maxPrice = Car::max('price');
        $this->minPrice = Car::min('price');
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
        $carQuery = Car::query()->where('status', 1);

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
                $carQuery;
            }
        }

        $carCount = $carQuery->count();

        return view('livewire.car-listing-system', [
            'cars' => $carQuery->paginate(10),
            'carCount' => $carCount,
        ]);
    }
}
