<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;
use App\Models\Brand;
use App\Models\ModelCar;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\DB;
class SuaCarinfoGarage extends Component
{
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
    public $idCar;
    public $Cardetail;
    public function Cardetail($idCar){
        $this->idCar = $idCar;
    }
    public function render()
    {
        $this->Cardetail = DB::table('cars')->where('id',$this->idCar)->get();
        return view('livewire.suacarinfo-garage');
    }
}
