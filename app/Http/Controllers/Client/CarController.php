<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\ModelCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
  public function sellCar(Request $request){
    $brands = Brand::all();
    $colors = ['Đỏ', "Bạc", "Đen", "Ghi", "Trắng", "Vàng", "Xanh", "Nhiều màu"];
    $fuels = ["Xăng", "Dầu Diesl", "Điện", "Loại khác"];
    $year_of_manufacture = [2023, 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 'others'];
    // dd($year_of_manufacture);
    // $model_cars = DB::table('model_cars')
    // ->join('brands', 'brands.id','=', 'model_cars.brand_id')
    // ->get();

    // dd($model_cars);

    if($request->isMethod("POST")){
      // dd($request->except("_token"));

      if($request->hasFile('images')){

        // dd($request->images);
        // $count = count($request->file('images'));
        // dd($count);

        foreach($request->file('images') as $image){
          $imageName = 'images/'.time().$image->getClientOriginalName();
          $image->move(public_path('storage/images'), $imageName);
          $images = [
            "imageName" => $imageName
          ];
        }
      }
      // dd($images);

      $car_info = [
        "model_name" => $request->model_name,
        "transmission" =>$request->transmission,
        "fuel"=>$request->fuel,
        "number_of_seats"=>$request->number_of_seats,
        "color"=>$request->color,
        "version"=>$request->version,
        "year_of_manufacture"=>$request->year_of_manufacture,
        "condition"=>$request->condition,
        "mileage_traveled"=>$request->mileage_traveled,
        "price"=>$request->price,
        "title"=>$request->title,
        "description"=>$request->description,
      ];

      $contact = [
        "name" => $request->name,
        "email" => $request->email,
        "phone" => $request->phone,
      ];
      // dd($contact);

      $newCar = Car::create([
        'title' => $request->title,
        'price' =>$request->price,
        'user_id' => 1,
        'brand_id' => 1,
        'city' => "HA NOI",
        'full_address' => $request->full_address,
        'contact' => $contact,
        'car_info' => $car_info,
        'verhicle_image_library' => $images
      ]);
      if($newCar){
        dd(123);
      }
    }
    return view("form-sell-car", compact("brands", 'year_of_manufacture', 'colors', 'fuels'));
  }

  // public function getModelCars(){
  //   $brand_id = $_GET['brand_id'];
  //   $model_cars = ModelCar::where('brand_id',$brand_id)->get();
  //   return response()->json($model_cars);
  // }
  //
}
