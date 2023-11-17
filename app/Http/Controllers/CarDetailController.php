<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarDetailController extends Controller
{
    public function index($slug = null) {
        $carDetail = [];
        if($slug) {
            $carDetail = Car::where('slug', $slug)->first();
        }

        // dd($carDetail->model->model_name);

        return view('detail', compact('carDetail'));


    }
}
