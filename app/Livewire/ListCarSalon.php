<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Salon;
use Livewire\Component;
use Livewire\WithPagination;

class ListCarSalon extends Component
{
    use WithPagination;

    public $salonSlug;

    public $searchCar;
    public $brandCar;

    public function mount($salonSlug=null) {
        $this->salonSlug = $salonSlug; 
    }

    public function render()
    {
        $salonInfo = Salon::where('slug', $this->salonSlug)->first();
        if (!$salonInfo) {
            abort(404);
        }

        $cars = Car::query()->where('salon_id', $salonInfo->id)->where('status', 1);

        $brands = Brand::join('cars', 'brands.id', '=', 'cars.brand_id')
            ->where('cars.salon_id', $salonInfo->id)
            ->select('brands.id', 'brands.brand_name')
            ->distinct()
            ->get();
        if ($this->searchCar) {
            $cars->where('title', 'like', '%' . $this->searchCar . '%');
        }

        if ($this->brandCar) {
            $cars->where('brand_id', $this->brandCar);
        }

        if ($this->searchCar && $this->brandCar) {
            $cars->where('title', 'like', '%' . $this->searchCar . '%')
                ->where('brand_id', $this->brandCar);
        }

        return view('livewire.list-car-salon', [
            'cars' => $cars->paginate(4),
            'brands' => $brands
        ]);
    }
}
