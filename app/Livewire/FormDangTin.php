<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\Brand;
use Livewire\Component;
use App\Models\ModelCar;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;

class FormDangTin extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    #define requirement
    public $fuels = ["Xăng", "Dầu Diesl", "Điện", "Loại khác"];
    public $colors = ['red', "sliver", "black", "white", "yellow", "blue", "other"];
    public $years = [2023, 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 'others'];
    #define requirement

    #[Rule(['image_library.*' => 'required|image|max:10024', 'brand_select' => 'required','model_select' => 'required','transmission' => 'required','fuel' => 'required','number_of_seats' => 'required','color' => 'required','version' => 'required','condition' => 'required','mileage_traveled' => 'required','price' => 'required','title' => 'required','description' => 'required','phone' => 'required','name' => 'required','email' => 'required','district_id' => 'required','city_id' => 'required','full_address' => 'required','year_of_manufacture'=>'required'])]

    public $brand_select = '';public $model_select = '';public $models = [];public $image_library;public $transmission;public $fuel;public $number_of_seats;public $color;public $version;public $condition;public $mileage_traveled;public $price;public $title;public $description;public $phone;public $name;public $email;public $district_id;public $city_id;public $full_address;public $year_of_manufacture;

    public function firstStepSubmit()
    {
        $validated = $this->validateOnly('brand_select');
        $this->currentStep = 2;
    }

    public function saveCar()
    {
        $carData = [];
        $validated = $this->validate();
        $photoName = [];
        if($this->image_library) {
            foreach ($this->image_library as $photo) {
                $fileName = time() .'.'. $photo->getClientOriginalExtension();
                // dd($fileName);
                $dir_name = 'car_photos';
                $photo->storeAs('car_photos', $fileName, 'public');

                array_push($photoName, $dir_name . '/' . $fileName);
            }
        }

        $carData['verhicle_image_library'] = $photoName;
        $carData['user_id'] = auth()->id();
        $carData['title'] = $validated['title'];
        $carData['slug'] = Str::slug($carData['title']);
        $carData['price'] = $validated['price'];
        $carData['brand_id'] = $validated['brand_select'];
        $carData['model_car_id'] = $validated['model_select'];
        $carData['city_id'] = $validated['city_id'];
        $carData['district_id'] = $validated['district_id'];
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
            'district_id' => $validated['district_id'],
            'city_id' => $validated['city_id'],
            'full_address' => $validated['full_address'],
        );

        // dd($carData);

        $result = Car::create($carData);
        if($result) {
          session()->flash('status', 'you are added successfully!');

          return redirect()->route('profile')->with('status', 'Thành công!');
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
