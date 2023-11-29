<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Garage;
use Livewire\Component;
use App\Models\ModelCar;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\DB;

class AddCarGarage extends Component
{
    use WithFileUploads;
    #define requirement

    public $currentStep = 1;

    public $fuels = ["Xăng", "Dầu Diesl", "Điện", "Loại khác"];
    public $colors = [
        'red' => 'Đỏ',
        'silver' => 'Bạc',
        'black' => 'Đen',
        'white' => 'Trắng',
        'yellow' => 'Vàng',
        'gray' => 'Ghi',
        'blue' => 'Xanh',
        'multiple_color' => 'Nhiều màu'
    ];

    public $featureValues = [
        'PremiumWheel' => 'Bánh xe cao cấp',
        'Moonroof' => 'Cửa sổ trời',
        'PremiumAudio' => 'Âm thanh cao cấp',
        'Navigation' => 'Chế độ chỉ đường',
        'PremiumSeatMaterial' => 'Ghế da cao cấp',
        'Bluetooth' => 'Kết nối bluetooth',
        'RemoteEngineStart' => 'Khởi động từ xa',
        'Multi_ZoneClimateControl' => 'Điều hòa'
    ];

    public $seats = [
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
    ];

    public $years = [2023, 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 'others'];

    public $verhicle_image_library = [];

    public $brand_select = '';
    public $model_select = '';
    public $models = [];
    public $image_library;
    public $transmission;
    public $fuel;
    public $number_of_seats;
    public $color;
    public $version;
    public $condition;
    public $mileage;
    public $price;
    public $title;
    public $description;
    public $phone;
    public $name;
    public $email;
    public $district_id;
    public $city_id;
    public $full_address;
    public $year_of_manufacture;
    public $engine;

    public $verhicle_videos;

    public $features = [];


    public function previousStepSubmit()
    {
        return $this->currentStep--;
    }

    public function secondStepSubmit()
    {
        $this->validate([
            'brand_select' => 'required',
            'model_select' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'number_of_seats' => 'required',
            'color' => 'required',
            // 'version' => 'required',
            "engine" => 'required',
            'year_of_manufacture' => 'required',
            'mileage' => 'required',
            'price' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);
        return $this->currentStep++;
    }

    public function thirdStepSubmit()
    {
        $this->validate([
            'phone' => 'required',
            // 'email' => 'required',
            'city_id' => 'required',
            'district_id' => 'required',
            'full_address' => 'required',
        ]);

        return $this->currentStep++;
    }

    public function fourthStepSubmit()
    {
        $this->validate([
            'verhicle_image_library' => 'required|image|max:10024',
            'verhicle_videos' => 'required|video',
        ]);
    }

    public function saveCar(Request $request)
    {
        $carData = [];
        $photoName = [];

        $images = $this->verhicle_image_library;
        if (count($images) > 0) {
            foreach ($images as $photo) {
                $fileName = $photo->getFilename();
                $dir_name = 'car_photos';
                $photo->storeAs('car_photos', $fileName, 'public');

                array_push($photoName, $dir_name . '/' . $fileName);
            }
        }

        $videoName = "";
        if (!empty($this->verhicle_videos)) {
            $dir_name = 'video_car';
            $file = uploadFile($dir_name, $this->verhicle_videos);
            $videoName = $file;
        }

        $carData['verhicle_image_library'] = $photoName;
        $carData['verhicle_videos'] = $videoName;
        $carData['user_id'] = auth()->id();
        $carData['title'] = $this->title;
        $carData['slug'] = Str::slug($carData['title']);
        $carData['price'] = $this->price;
        $carData['brand_id'] = $this->brand_select;
        $carData['model_car_id'] = $this->model_select;
        $carData['city_id'] = $this->city_id;
        $carData['district_id'] = $this->district_id;
        $carData['full_address'] = $this->full_address;
        $carData['description'] = $this->description;

        $carData['car_info'] = array(
            "year_of_manufacture" => $this->year_of_manufacture,
            'transmission' => $this->transmission,
            'fuelType' => $this->fuel,
            'number_of_seats' => $this->number_of_seats,
            'color' => $this->color,
            'version' => $this->version,
            'condition' => $this->condition,
            'mileage' => $this->mileage,
            "features" => $this->features,
            'engine' => $this->engine,
        );

        $carData['contact'] = array(
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'district_id' => $this->district_id,
            'city_id' => $this->city_id,
            'full_address' => $this->full_address,
        );


        $result = Car::create($carData);
        if ($result) {
            session()->flash('status', 'you are added successfully!');

            return redirect()->route('profile')->with('status', 'Thành công!');
        }
    }

    public $idGarage;
    public $GarageDetail;
    public function GarageDetail($idGarage){
        $this->idGarage = $idGarage;
    }
    #[Computed()]
    public function render()
    {
        if (!empty($this->brand_select) && $this->brand_select != 0) {
            $this->models = ModelCar::where('brand_id', $this->brand_select)->get();
        }
        $GarageDetail = Garage::all()->where('id',1);
        $brands = Brand::all();
        return view('livewire.add-car-garage', [
            'brands' => $brands,
            
        ],compact('GarageDetail'));
    }
}

