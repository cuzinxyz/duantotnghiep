<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\GarageRequest;
use App\Models\Car;
use App\Models\Garage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CarController extends Controller
{
    public function sellCar()
    {
        return view("user-form.form-sell-car");
    }

    public function buyCar()
    {
        return view("user-form.form-buy-car");
    }

    public function listSellCar()
    {
        return view("user-form.list-sell-car");
    }

    public function showRoom()
    {
    }

    public function removeCar($id)
    {
        $car = Car::findOrFail($id);

        if ($car) {
            if ($car->user_id == auth()->id()) {
                $car->delete();

                return redirect()
                    ->route('profile')
                    ->with('success', 'Ẩn tin thành công !');
            }
        }
    }

    public function editSellCar($id)
    {
        return view("user-form.form-edit-sell-car", compact('id'));
    }
}
