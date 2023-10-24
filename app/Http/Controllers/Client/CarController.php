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
  public function sellCar(Request $request)
  {
    if($request->isMethod("POST")){
      // dd($request->except("_token"));

      if($request->hasFile('images')){

        // dd($request->images);
        // $count = count($request->file('images'));
        // dd($count);
        $images = [];

        foreach($request->file('images') as $image){
          $imageName = time().'_'.$image->getClientOriginalName();
          $image->move(public_path('storage/images'), $imageName);
          array_push($images, $imageName);
        }
      }
      // dd(json_encode($images));

      $car_info = [
        "model_name" => $request->model_cars,
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
        'city' => $request->city,
        'full_address' => $request->full_address,
        'contact' => $contact,
        'car_info' => $car_info,
        'verhicle_image_library' => json_encode($images)
      ]);
      if($newCar){
        dd(123);
      }
    }
    return view("form-sell-car");
  }
}
