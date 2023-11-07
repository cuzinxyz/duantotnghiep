<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Car;
use Kjmtrue\VietnamZone\Models\Province;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

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

    public function mount()
    {
        $this->brands = Brand::all();
        $this->locations = Province::all();
    }

    #[Layout('components.partials.layout-client')]
    public function render()
    {
        $carQuery = Car::query();

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
            $carQuery->whereBetween('car_info->manufactured', [$this->minYear, $this->maxYear]);
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

        return view('livewire.car-listing-system', [
            'cars' => $carQuery->where('status', 1)->paginate(2)
        ]);
    }
}
