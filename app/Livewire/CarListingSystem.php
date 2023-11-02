<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Support\Facades\DB;
use Kjmtrue\VietnamZone\Models\Province;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CarListingSystem extends Component
{
    public $cars;
    public $make;
    public $count;
    public $brands;
    public $locations;
    public $updateBrands = [];
    public $updateLocations = [];
    public $minYear;
    public $maxYear;
    public $sortPrice;

    public function mount()
    {
        $this->cars = Car::where('status', 1)->get();
        $this->count = count($this->cars);
        $this->brands = Brand::all();
        $this->locations = Province::all();
    }

    public function updated()
    {
        $this->updateCarList();
    }

    private function updateCarList()
    {
        $query = Car::where('status', 1);

        if (!empty($this->make)) {
            $query->where('title', 'LIKE', '%' . $this->make . '%');
        }

        if (!empty($this->updateBrands)) {
            $query->whereIn('brand_id', $this->updateBrands);
        }

        if (!empty($this->updateLocations)) {
            $query->whereIn('city_id', $this->updateLocations);
        }

        if (!empty($this->minYear && $this->maxYear)) {
            $query->whereBetween('car_info->manufactured', [$this->minYear, $this->maxYear]);
        }

        if (!empty($this->sortPrice)) {
            if ($this->sortPrice == 1) {
                $query->orderBy('price', 'asc');
            } elseif ($this->sortPrice == 2) {
                $query->orderBy('price', 'desc');
            } else {
                $query;
            }
        }

        $this->cars = $query->get();
        $this->count = count($this->cars);
    }

    #[Layout('components.partials.layout-client')]
    public function render()
    {
        return view('livewire.car-listing-system');
    }
}
