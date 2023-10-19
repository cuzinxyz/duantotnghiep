<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\ModelCar;
use Livewire\Component;
use Livewire\Attributes\Computed;

class FormDangTin extends Component
{
    public $brand_select = '';
    public $model_cars = [];
    public $fuels = ["Xăng", "Dầu Diesl", "Điện", "Loại khác"];
    public $colors = ['Đỏ', "Bạc", "Đen", "Ghi", "Trắng", "Vàng", "Xanh", "Nhiều màu"];
    public $year_of_manufacture = [2023, 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 'others'];


    #[Computed]
    public function render()
    {
        $brands = Brand::all();

        if(!empty($this->brand_select)) {
            $this->model_cars = ModelCar::where('brand_id', $this->brand_select)->get();
        }

        return view('livewire.form-dang-tin', [
            'brands' => $brands,
            'model_cars' => $this->model_cars
        ]);
    }
}
