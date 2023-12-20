<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\Brand;
use Livewire\Component;
use App\Models\ModelCar;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SingleBrandCategory extends Component
{
    use WithPagination;

    public $brand, $model;
    public $price;
    public $search;

    public $modelCars;
    public $brands;
    public $slug;
    public $max_price, $min_price;
    public $brandDetail;

    public function mount($slug = null)
    {
        $this->slug = $slug;

        $this->max_price = Car::max('price');
        $this->min_price = Car::min('price');

        $this->brandDetail = Brand::where('brand_name', $slug)->first();
    }


    public function filterCategory()
    {
        if ($this->slug) {
            $brand = Brand::where('brand_name', $this->slug)->select('id')->first();

            // dd($brand);
            $brand_id = $brand->id;

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
            // var_dump($carIds);
            $recommendCars = Car::whereIn('id', $carIds)
                ->where('brand_id', $brand_id)
                ->whereNull('salon_id')
                ->where('status', 1)
                ->get();
            // dd($recommendCars);

            $recommendCars = $recommendCars->map(function ($car) {
                $car['is_vip'] = true;

                return $car;
            });

            $id = $recommendCars->pluck('id');

            $normalCars = Car::where('brand_id', $brand_id)
                ->whereNotIn('id', $id)
                ->where('status', 1)
                ->whereNull('salon_id')
                ->orderBy('created_at', 'desc')
                ->get();

            $cars = new \Illuminate\Database\Eloquent\Collection;
            $cars = $cars->merge($recommendCars);
            $cars = $cars->merge($normalCars);

            // $cars = $cars->sortByDesc('is_vip');
            $cars = $cars->sort(function ($a, $b) {
                // Nếu cả hai đều có is_vip là true, sắp xếp theo created_at
                if ($a['is_vip'] && $b['is_vip']) {
                    return $b['created_at'] <=> $a['created_at'];
                }

                // Nếu chỉ có một trong hai có is_vip là true, đặt is_vip là true lên đầu
                return $b['is_vip'] <=> $a['is_vip'];
            });

            $this->slug = null;
        } else {
            $cars = Car::where('status', 1)
                ->whereNull('salon_id')
                ->simplePaginate(9);

            if ($this->price) {
                $parts = explode("-", $this->price);

                if (count($parts) == 2) {
                    $number1 = intval(trim($parts[0]));
                    $number2 = intval(trim($parts[1]));

                    $cars = Car::where('price', '>=', $number1)->where('price', '<=', $number2)->where('status', 1)
                        ->simplePaginate(9);
                }
            }

            if ($this->brand) {
                $cars = Car::where('brand_id', $this->brand)
                    ->whereNull('salon_id')
                    ->where('status', 1)
                    ->simplePaginate(9);
            }

            if ($this->search) {
                $cars = Car::where('title', 'like', '%' . $this->search . '%')
                    ->whereNull('salon_id')
                    ->where('status', 1)
                    ->simplePaginate(9);
            }


            if ($this->brand && $this->model) {
                $cars = Car::where('brand_id', $this->brand)
                    ->whereNull('salon_id')
                    ->where('model_car_id', $this->model)
                    ->where('status', 1)
                    ->simplePaginate(9);
            }

            if ($this->brand && $this->search) {
                $cars = Car::where('brand_id', $this->brand)
                    ->whereNull('salon_id')
                    ->where('title', 'like', '%' . $this->search . '%')
                    ->where('status', 1)
                    ->simplePaginate(9);
            }

            if ($this->brand && $this->model && $this->search) {
                $cars = Car::where('brand_id', $this->brand)
                    ->where('title', 'like', '%' . $this->search . '%')
                    ->whereNull('salon_id')
                    ->where('model_car_id', $this->model)
                    ->where('status', 1)
                    ->simplePaginate(9);
            }

            if ($this->brand && $this->price && $this->search) {
                $parts = explode("-", $this->price);
                $number1 = intval(trim($parts[0]));
                $number2 = intval(trim($parts[1]));

                $cars = Car::where('brand_id', $this->brand)
                    ->where('title', 'like', '%' . $this->search . '%')
                    ->whereNull('salon_id')
                    ->where('price', '>=', $number1)
                    ->where('price', '<=', $number2)
                    ->where('status', 1)
                    ->simplePaginate(9);
            }

            if ($this->price && $this->search) {
                $parts = explode("-", $this->price);
                $number1 = intval(trim($parts[0]));
                $number2 = intval(trim($parts[1]));

                $cars = Car::where('title', 'like', '%' . $this->search . '%')
                    ->whereNull('salon_id')
                    ->where('price', '>=', $number1)
                    ->where('price', '<=', $number2)
                    ->where('status', 1)
                    ->simplePaginate(9);
            }


            if ($this->price && $this->brand) {
                $parts = explode("-", $this->price);
                $number1 = intval(trim($parts[0]));
                $number2 = intval(trim($parts[1]));

                $cars = Car::where('price', '>=', $number1)
                    ->whereNull('salon_id')
                    ->where('price', '<=', $number2)
                    ->where('brand_id', $this->brand)
                    ->where('status', 1)
                    ->simplePaginate(9);
            }

            if ($this->price && $this->brand && $this->model) {
                $parts = explode("-", $this->price);
                $number1 = intval(trim($parts[0]));
                $number2 = intval(trim($parts[1]));

                $cars = Car::where('price', '>=', $number1)
                    ->whereNull('salon_id')
                    ->where('price', '<=', $number2)
                    ->where('brand_id', $this->brand)
                    ->where('model_car_id', $this->model)
                    ->where('status', 1)
                    ->simplePaginate(9);
            }

            if ($this->search && $this->brand && $this->model) {
                $cars = Car::where('title', 'like', '%' . $this->search . '%')
                    ->whereNull('salon_id')
                    ->where('brand_id', $this->brand)
                    ->where('model_car_id', $this->model)
                    ->where('status', 1)
                    ->simplePaginate(9);
            }

            if ($this->price && $this->brand && $this->model && $this->search) {
                $parts = explode("-", $this->price);
                $number1 = intval(trim($parts[0]));
                $number2 = intval(trim($parts[1]));

                $cars = Car::where('title', 'like', '%' . $this->search . '%')
                    ->where('price', '>=', $number1)
                    ->whereNull('salon_id')
                    ->where('price', '<=', $number2)
                    ->where('brand_id', $this->brand)
                    ->where('model_car_id', $this->model)
                    ->where('status', 1)
                    ->simplePaginate(9);
            }
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

        return view('livewire.single-brand-category', [
            'ModelCars' => $this->modelCars,
            'brands' => $this->brands,
            'cars' => $this->filterCategory()
        ]);
    }
}
