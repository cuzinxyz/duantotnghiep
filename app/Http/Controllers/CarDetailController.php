<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Car;

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

        $recentCars = Car::inRandomOrder()->limit(4)->get();

        $ads = Ads::where('priority', 2)
            ->inRandomOrder()
            ->limit(1)
            ->get();

        return view('detail', compact('carDetail', 'recentCars', 'ads'));
    }
}
