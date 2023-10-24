<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Car;
use Livewire\Component;
use App\Models\ModelCar;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;
use Wavey\Sweetalert\Sweetalert;

class FormDangTin extends Component
{
    use WithFileUploads;
    #define requirement 
    public $fuels = ["Xăng", "Dầu Diesl", "Điện", "Loại khác"];
    public $colors = ['Đỏ', "Bạc", "Đen", "Ghi", "Trắng", "Vàng", "Xanh", "Nhiều màu"];
    public $years = [2023, 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 'others'];
    #define requirement 
    
    #[Rule(['image_library.*' => 'required|image|max:10024', 'brand_select' => 'required','model_select' => 'required','transmission' => 'required','fuel' => 'required','number_of_seats' => 'required','color' => 'required','version' => 'required','condition' => 'required','mileage_traveled' => 'required','price' => 'required','title' => 'required','description' => 'required','phone' => 'required','name' => 'required','email' => 'required','districts' => 'required','city' => 'required','full_address' => 'required','year_of_manufacture'=>'required'])]

    public $brand_select = '';public $model_select = '';public $models = [];public $image_library;public $transmission;public $fuel;public $number_of_seats;public $color;public $version;public $condition;public $mileage_traveled;public $price;public $title;public $description;public $phone;public $name;public $email;public $districts;public $city;public $full_address;public $year_of_manufacture;

    public function saveCar() 
    {
        $carData = [];
        $validated = $this->validate();
        $photoName = [];
        if($this->image_library) {
            foreach ($this->image_library as $photo) {
                $photo->store('public/car_photos');
                array_push($photoName, $photo->getClientOriginalName());
            }    
        }

        $carData['verhicle_image_library'] = $photoName;
        $carData['user_id'] = auth()->id();
        $carData['title'] = $validated['title'];
        $carData['price'] = $validated['price'];
        $carData['brand_id'] = $validated['brand_select'];
        $carData['model_id'] = $validated['model_select'];
        $carData['city'] = $validated['city'];
        $carData['full_address'] = $validated['full_address'];
        $carData['description'] = $validated['description'];

        $carData['car_info'] = array(
            'transmission' => $validated['transmission'],
            'fuel' => $validated['fuel'],
            'number_of_seats' => $validated['number_of_seats'],
            'color' => $validated['color'],
            'version' => $validated['version'],
            'condition' => $validated['condition'],
            'mileage_traveled' => $validated['mileage_traveled'],
        );

        $carData['contact'] = array(
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'districts' => $validated['districts'],
            'city' => $validated['city'],
            'full_address' => $validated['full_address'],
        );

        $result = Car::create($carData);
        if($result) {
            Sweetalert::success('Add car successfully', 'Title');
        }
    }

    #[Computed()]
    public function render()
    {
        if(!empty($this->brand_select) && $this->brand_select != 0) 
        {
            $this->models = ModelCar::where('brand_id', $this->brand_select)->get();
        }
        $brands = Brand::all();
        return view('livewire.form-dang-tin', [
            'brands' => $brands,
        ]);
    }
}
