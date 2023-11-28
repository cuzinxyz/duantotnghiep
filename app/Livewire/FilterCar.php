<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Car;
use App\Models\ModelCar;
use Livewire\Component;

class FilterCar extends Component
{
    public $cars, $brandCars, $modelCars, $engineCars;
    public $brand, $model, $engine;

    public function mount()
    {
        $this->cars = Car::with(['brand'])->get();
        $this->brandCars = Brand::all();
    }

    public function filterCar()
    {
        if ($this->brand > 0) {
            $this->cars = Car::with(['brand'])
                ->whereBrandId($this->brand)
                ->get();
            $this->modelCars = ModelCar::query()
                ->whereBrandId($this->brand)
                ->get();
            if ($this->model > 0) {
                $this->cars = Car::with(['brand'])
                    ->whereBrandId($this->brand)
                    ->whereModelCarId($this->model)
                    ->get();
                $this->engineCars = [
                    1000 => 1000,
                    1100 => 1100,
                    1200 => 1200,
                ];
                if (in_array($this->engine, [1000, 1100, 1200])) {
                    $engine = $this->engine;
                    $this->cars = Car::with(['brand'])
                        ->whereBrandId($this->brand)
                        ->whereModelCarId($this->model)
                        ->where(function ($query) use ($engine){
                            $query->orWhereJsonContains('car_info->engine', $engine);
                        })
                        ->get();
                }else $this->cars = Car::with(['brand'])
                    ->whereBrandId($this->brand)
                    ->whereModelCarId($this->model)
                    ->get();
            } else {
                $this->cars = Car::with(['brand'])
                    ->whereBrandId($this->brand)
                    ->get();
                $this->engineCars = [];
            }
        } else {
            $this->cars = Car::with(['brand'])->get();
            $this->modelCars = [];
            $this->engineCars = [];
        }
        return $this->cars;
    }
    public function render()
    {
        return view('livewire.filter-car');
    }
}
