<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mark = false;
        $banners = Banner::all();

        // $recentIds = [];
        // $query = Car::whereNotIn('id', $recentIds)->limit(10);
        // $random = $query->inRandomOrder()->get();
        // $recentIds[] = $random->id;

        $featured_cars = Car::where('recommended', 1)->get();

        if($banners->isEmpty()) {
            $banners = [
                ['image_url' => '/images/home5-banner-img-03.png'],
                ['image_url' => '/images/home5-banner-img-02.png'],
            ];

            $banners = array_map(function($item) {
                return (object) $item;
            }, $banners);
            $mark = true;
        }

        // dd($featured_cars);

        return view('index', compact('banners', 'mark', 'featured_cars'));
    }
}
