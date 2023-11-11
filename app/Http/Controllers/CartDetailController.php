<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    public function index($slug = null) {
        $carDetail = [];
        if($slug) {
            $carDetail = Car::where('slug', $slug)->first();
        }

        return view('detail', compact('carDetail'));


    }
}
