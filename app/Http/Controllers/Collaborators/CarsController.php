<?php

namespace App\Http\Controllers\Collaborators;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CarsController extends Controller
{
    public function listCars()
    {
        return view('collaborators.cars.cars');
    }


    public  function carsData()
    {
        $cars = Car::select(['id', 'slug', 'title', 'user_id', 'created_at'])
        ->orderBy('created_at', 'desc')
        ->get();

        return DataTables::of($cars)
            ->addColumn(
                'view',
                function($car) {
                    return '<a href="' . route('collaborators.carDetail', $car->slug) . '" class="btn btn-warning">Xem chi tiết</a>';
                }
            )
            ->editColumn(
                'created_at',
                function($car) {
                    return Carbon::parse($car->created_at)->diffForHumans();
                }
            )
            ->editColumn(
                'username',
                function ($car) {
                    return $car->user->name;
                }
            )
            ->rawColumns(['view'])
            ->toJson();
    }

    public function carDetail($slug) {

        $car = Car::where('slug', $slug)->first();

        return view('collaborators.cars.detail', compact('car'));
    }
}
