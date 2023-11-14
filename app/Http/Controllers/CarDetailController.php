<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarDetailController extends Controller
{
  public function carDetail(){
    $car = Car::find(1);
    $brands = Brand::all();
    return view('car-detail',compact('car','brands') );
  }
    //
}
