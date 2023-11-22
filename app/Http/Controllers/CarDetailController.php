<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarDetailController extends Controller
{
  public function carDetail($id){
    $car = Car::find($id);
    $brands = Brand::all();
    return view('car-detail', compact('car', 'brands'));
  }
    //
=======
use App\Models\Car;
use Illuminate\Http\Request;

class CarDetailController extends Controller
{
    public function index($slug = null)
    {
        $carDetail = [];
        if ($slug) {
            $carDetail = Car::where('slug', $slug)->first();
        }
        # save view
        views($carDetail)->record();

        return view('detail', compact('carDetail'));
    }
>>>>>>> main
}
