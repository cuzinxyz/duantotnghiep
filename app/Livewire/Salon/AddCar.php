<?php

namespace App\Livewire\Salon;

use App\Models\Brand;
use Livewire\Component;
use App\Models\ModelCar;
use App\Models\Salon;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;

class AddCar extends Component
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

    #[Computed()]
    public function render()
    {
        $salonInfo = Salon::where('user_id', auth()->id())->first();
        if (!empty($this->brand_select) && $this->brand_select != 0) {
            $this->models = ModelCar::where('brand_id', $this->brand_select)->get();
        }
        $brands = Brand::all();

        return view('livewire.salon.add-car', [
            'brands' => $brands,
            'salonInfo' => $salonInfo
        ]);
    }
}
