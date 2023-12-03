<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\Brand;
use Livewire\Component;
use App\Models\ModelCar;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

class SingleBrandCategory extends Component
{
    use WithPagination;

    public $brand, $model;
    public $price;

    public $modelCars;
    public $brands;
    public $slug;
    public $max_price, $min_price;
    public $brandDetail;

    public function mount($slug=null)
    {
        $this->slug = $slug;

        $this->max_price = Car::max('price');
        $this->min_price = Car::min('price');

        $this->brandDetail = Brand::where('brand_name', $slug)->first();
    }


    public function filterCategory() {
        if($this->slug) {
            $brand = Brand::where('brand_name', $this->slug)->select('id')->first();

            // dd($brand);
            $brand_id= $brand->id;
            $cars = Car::where('brand_id', $brand_id)->where('status', 1)->simplePaginate(9);
        }else {
            $cars = Car::where('status', 1)->simplePaginate(9);
        }


        if ($this->price) {
            $parts = explode("-", $this->price);

            if (count($parts) == 2) {
                $number1 = intval(trim($parts[0]));
                $number2 = intval(trim($parts[1]));

                $cars = Car::where('price', '>=', $number1)->where('price', '<=', $number2)->where('status', 1)
                ->simplePaginate(9);
            }
        }

        if($this->brand) {
            $cars = Car::where('brand_id', $this->brand)->where('status', 1)
            ->simplePaginate(9);
        }

        if($this->price && $this->brand && $this->model ) {
            $parts = explode("-", $this->price);
            $number1 = intval(trim($parts[0]));
            $number2 = intval(trim($parts[1]));

            $cars = Car::where('price', '>=', $number1)
            ->where('price', '<=', $number2)
            ->where('brand_id', $this->brand)
            ->where('model_car_id', $this->model)
            ->where('status', 1)
            ->simplePaginate(9);
        }

        return $cars;
    }

    #[Layout('components.partials.layout-client')]
    public function render()
    {
        if (!empty($this->brand) && $this->brand != 0) {
            $this->modelCars = ModelCar::where('brand_id', $this->brand)
            ->get();
        }

        $this->brands = Brand::all();

        // $cars = $this->filterCategory();
        // dd($this->brands);

        return view('livewire.single-brand-category', [
            'ModelCars' => $this->modelCars,
            'brands' => $this->brands,
            'cars' => $this->filterCategory()
        ]);
    }
}
