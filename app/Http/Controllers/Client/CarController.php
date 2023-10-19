<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\ModelCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
  public function sellCar(Request $request)
  {
    // $brands = Brand::all();
    // $colors = ['Đỏ', "Bạc", "Đen", "Ghi", "Trắng", "Vàng", "Xanh", "Nhiều màu"];
    // $fuels = ["Xăng", "Dầu Diesl", "Điện", "Loại khác"];
    // $year_of_manufacture = [2023, 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 'others'];
    // // dd($year_of_manufacture);
    // // $model_cars = DB::table('model_cars')
    // // ->join('brands', 'brands.id','=', 'model_cars.brand_id')
    // // ->get();

    // // dd($model_cars);

    // if($request->isMethod("POST")){
    //   dd($request->except("_token"));
    // }
    return view("form-sell-car");
  }

  // public function getModelCars(){
  //   $brand_id = $_GET['brand_id'];
  //   $model_cars = ModelCar::where('brand_id',$brand_id)->get();
  //   return response()->json($model_cars);
  // }
  //
}
