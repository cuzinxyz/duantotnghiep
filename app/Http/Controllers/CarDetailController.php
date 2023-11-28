<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarDetailController extends Controller
{
    public function index(Request $request, $slug = null)
    {
        $carDetail = [];
        if ($slug) {
            $carDetail = Car::where('slug', $slug)->first();
        }
        # save view
        views($carDetail)->record();

        $recentCars = Car::inRandomOrder()->limit(4)->get();
        if ($request->isMethod('POST')) {
            dd($request);
        }
        return view('detail', compact('carDetail', 'recentCars'));
    }
}
