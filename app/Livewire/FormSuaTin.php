<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\Brand;
use Livewire\Component;
use App\Models\ModelCar;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class FormSuaTin extends Component
{
    use WithFileUploads;
    #define requirement
    public $id;
    public $brands;
    public $car;
    public $fuels = [
        "Xăng",
        "Dầu Diesl",
        "Điện",
        "Loại khác"
    ];
    public $colors = [
        'black' => 'Đen',
        'white' => 'Trắng',
        'silver' => 'Bạc',
        'gray' => 'Ghi',
        'red' => 'Đỏ',
        'blue' => 'Xanh',
        'beige' => 'Be',
        'green' => 'Xanh lá',
        'yellow' => 'Vàng',
        'purple' => 'Tím',
        'brown' => 'Nâu',
        'different' => 'Khác'
    ];
    public $featureValues = [
        'PremiumWheel' => 'Bánh xe cao cấp',
        'Moonroof' => 'Cửa sổ trời',
        'PremiumAudio' => 'Âm thanh cao cấp',
        'PremiumSeatMaterial' => 'Ghế da cao cấp',
        'Bluetooth' => 'Kết nối bluetooth',
        'RemoteEngineStart' => 'Khởi động từ xa',
        'Navigation' => 'Chế độ chỉ đường',
        'ParkingCamera' => 'Camera đỗ xe',
        'ParkingSensors' => 'Cảm biến',
        'AutonomousDriving' => 'Lái xe tự động',
        'BlindSpotAssist' => 'Hỗ trợ điểm mù',
        'LaneAssist' => 'Hỗ trợ làn đường',
    ];
    public $seats = [
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
    ];
    public $years = [
        2023,
        2022,
        2021,
        2020,
        2019,
        2018,
        2017,
        2016,
        2015,
        2014,
        2013,
        2012,
        2011,
        2010,
        'others'
    ];
    public $models = [];

    public $verhicle_image_library = [];
    public $verhicle_videos;
    #[Validate('required', message: 'Bắt buộc phải chọn thương hiệu.')]
    public $brand_select = '';
    #[Validate('required', message: 'Bắt buộc phải chọn tên xe.')]
    public $model_select = '';
    #[Validate('required', message: 'Bắt buộc phải chọn hộp số.')]
    public $transmission;
    #[Validate('required', message: 'Bắt buộc phải chọn loại nhiên liệu.')]
    public $fuel;
    #[Validate('required', message: 'Bắt buộc phải chọn số chỗ ngồi.')]
    public $number_of_seats;
    #[Validate('required', message: 'Bắt buộc phải chọn màu sắc.')]
    public $color;
    public $version;
    #[Validate('required', message: 'Bắt buộc phải nhập số KM.')]
    public $mileage;
    #[Validate('required', message: 'Bắt buộc phải nhập giá.')]
    public $price;
    #[Validate('required', message: 'Bắt buộc phải nhập tiêu đề.')]
    public $title;
    #[Validate('required', message: 'Bắt buộc phải nhập mô tả.')]
    public $description;
    #[Validate('required', message: 'Bắt buộc phải nhập SĐT.')]
    public $phone;
    #[Validate('required', message: 'Bắt buộc phải nhập email.')]
    public $email;
    #[Validate('required', message: 'Bắt buộc phải chọn quận / huyện.')]
    public $district_id;
    #[Validate('required', message: 'Bắt buộc phải chọn thành phố.')]
    public $city_id;
    #[Validate('required', message: 'Bắt buộc phải nhập địa chỉ chi tiết.')]
    public $full_address;
    #[Validate('required', message: 'Bắt buộc phải nhập năm sản xuất.')]
    public $year_of_manufacture;
    #[Validate('required', message: 'Bắt buộc phải nhập số mã lực.')]
    public $engine;
    #[Validate('required', message: 'Bắt buộc phải chọn một số tính năng khác.')]
    public $features = [];

    public function updateCar()
    {
        $this->validate();
        $carData = [];
        $photoName = [];
        // dd(count($this->verhicle_image_library));
        if (count($this->verhicle_image_library) > 0) {
            foreach ($this->car->verhicle_image_library as $photo) {
                Storage::delete($photo);
            }
            foreach ($this->verhicle_image_library as $photo) {
                $fileName = $photo->getFilename();
                $dir_name = 'car_photos';
                $photo->storeAs('car_photos', $fileName, 'public');
                array_push($photoName, $dir_name . '/' . $fileName);

                $dir_name_image = 'car_photos';
                $fileImage = uploadFile($dir_name_image, $photo);
                array_push($photoName, $fileImage);
            }
            $carData['verhicle_image_library'] = $photoName;
        }
        if ($this->verhicle_videos) {
            Storage::delete('/public/' . $this->car->verhicle_videos);
            $dir_name = 'video_car';
            $file = uploadFile($dir_name, $this->verhicle_videos);
            $videoName = $file;
            $carData['verhicle_videos'] = $videoName;
        }

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
            'mileage' => $this->mileage,
            "features" => $this->features,
            'engine' => $this->engine,
        );
        $carData['contact'] = array(
            'full_address' => $this->full_address,
            'phone' => $this->phone,
            'email' => $this->email,
        );
        $carData['status'] = 0;
        $result = Car::findOrFail($this->id)->update($carData);
        if ($result) {
            return redirect()->route('profile')->with('status', 'Cập nhật thành công! Bạn cần chờ quản trị viên phê duyệt!');
        }
    }

    public function mount()
    {
        $this->brands = Brand::all();
        $this->car = Car::where('id', $this->id)->first();
        $this->brand_select = $this->car->brand_id;
        $this->model_select = $this->car->model_car_id;
        $this->fuel = $this->car->car_info['fuelType'];
        $this->number_of_seats = $this->car->car_info['number_of_seats'];
        $this->version = $this->car->car_info['version'];
        $this->year_of_manufacture = $this->car->car_info['year_of_manufacture'];
        $this->mileage = $this->car->car_info['mileage'];
        $this->price = $this->car->price;
        $this->engine = $this->car->car_info['engine'];
        $this->title = $this->car->title;
        $this->description = $this->car->description;
        $this->color = $this->car->car_info['color'];
        $this->transmission = $this->car->car_info['transmission'];
        $this->features = $this->car->car_info['features'];
        $this->phone = $this->car->contact['phone'];
        $this->email = $this->car->contact['email'];
        $this->city_id = $this->car->city_id;
        $this->district_id = $this->car->district_id;
        $this->full_address = $this->car->full_address;
    }

    #[Computed()]
    public function render()
    {
        if (auth()->check()) {
            if (auth()->id() != $this->car->user_id) {
                abort(404);
            }
        }
        if (!empty($this->brand_select) && $this->brand_select != 0) {
            $this->models = ModelCar::where('brand_id', $this->brand_select)->get();
        }
        return view('livewire.form-sua-tin');
    }
}
