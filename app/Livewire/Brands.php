<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\ModelCar;
use Livewire\Component;

class Brands extends Component
{
    public $brands;
    public $model_cars = [];

    public function mount()
    {
        $this->brands = Brand::all();
        $this->model_cars = collect();
    }

    public function updateModelCars($value)
    {
        $this->model_cars = ModelCar::where('brand_id', $value)->get();
    }
    public function render()
    {
        return view('livewire.brands');
    }
}
