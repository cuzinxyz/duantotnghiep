<?php

namespace App\Livewire\Salon;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Salon;
use Livewire\Component;
use App\Models\ModelCar;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;

class EditCar extends Component
{
    use WithFileUploads;
    #define requirement

    public $salon;

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
        'different' => 'Khác'
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
    public $full_address;
    public $year_of_manufacture;
    public $engine;
    public $verhicle_videos;
    public $features = [];
    public $car;
    public $carId;

    public function mount($carId) {
        $this->carId = $carId;
        $this->car = Car::where('id', $carId)->first();
        $this->brand_select = $this->car->brand_id;
        $this->model_select = $this->car->model_car_id;
        $this->fuel = $this->car->car_info['fuelType'];
        $this->number_of_seats = $this->car->car_info['number_of_seats'];

        if(isset($this->car->car_info['version'])) {
            $this->version = $this->car->car_info['version'];
        }

        $this->year_of_manufacture = $this->car->car_info['year_of_manufacture'];
        $this->mileage = $this->car->car_info['mileage'];
        $this->price = $this->car->price;
        $this->engine = $this->car->car_info['engine'];
        $this->title = $this->car->title;
        $this->description = $this->car->description;
        $this->color = $this->car->car_info['color'];
        $this->transmission = $this->car->car_info['transmission'];
        $this->features = $this->car->car_info['features'];
        $this->full_address = $this->car->full_address;
    }

    public function saveCar()
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
        $carData['full_address'] = $this->salon->address;
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
            'name' => $this->salon->salon_name,
            'phone' => $this->salon->phone_number,
            'email' => $this->salon->email,
        );
        $carData['salon_id'] = $this->salon->id;
        $carData['status'] = 1;

        $result = Car::where('id', $this->carId)->update($carData);
        if ($result) {
            return redirect()->route('profile')->with('status', 'Cập nhật thành công!');
        }
    }

    #[Computed()]
    public function render()
    {
        $salonInfo = Salon::where('user_id', auth()->id())->first();

        if ($salonInfo) {
            $this->salon = $salonInfo;
        }

        if (!empty($this->brand_select) && $this->brand_select != 0) {
            $this->models = ModelCar::where('brand_id', $this->brand_select)->get();
        }
        $brands = Brand::all();

        return view('livewire.salon.edit-car', [
            'brands' => $brands,
            'salonInfo' => $salonInfo
        ]);
    }
}
