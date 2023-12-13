<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Car;
use Illuminate\Http\Request;

class CarDetailController extends Controller
{
    public function index(Request $request, $slug = null)
    {
        $carDetail = [];
        if ($slug) {
            $carDetail = Car::where('slug', $slug)->first();

            if(!$carDetail) {
                abort(404);
            }
        }

        # save view
        views($carDetail)->record();

        $recentCars = Car::inRandomOrder()->where('status', 1)->limit(4)->get();

        $ads = Ads::where('priority', 2)
            ->inRandomOrder()
            ->limit(1)
            ->get();

        return view('detail', compact('carDetail', 'recentCars', 'ads'));
    }
}
