<?php

namespace App\Http\Controllers\Collaborators;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\User;
use App\Mail\CarRegistMail;
use Illuminate\Http\Request;
use App\Events\CarCollaboratorEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;

class CarsController extends Controller
{
    public function listCars()
    {
        return view('collaborators.cars.cars');
    }


    public  function carsData()
    {
        $collaborator_id = auth()->user()->id;
        $cars = Car::select(['id', 'slug', 'title', 'user_id', 'created_at'])
            ->where([
                'status' => 0,
                'collaborator_id' => $collaborator_id
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        return DataTables::of($cars)
            ->addColumn(
                'view',
                function ($car) {
                    return '<a href="' . route('collaborators.carDetail', $car->slug) . '" class="btn btn-warning">Xem chi tiết</a>';
                }
            )
            ->editColumn(
                'created_at',
                function ($car) {
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

    public function carDetail($slug)
    {

        $car = Car::where('slug', $slug)->first();

        return view('collaborators.cars.detail', compact('car'));
    }

    public function activeCar($carID)
    {
        $car = Car::find($carID);

        Car::where('id', $carID)->update([
            'status' => 1
        ]);

        $user = User::select(['total_assign'])->find($car->collaborator_id);

        $total_assign = $user->total_assign - 1;

        if ($user->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $car->collaborator_id)->update([
            'total_assign' => $total_assign
        ]);

        Mail::to($car->contact['email'])->later(now()->addSeconds(10), new CarRegistMail($car));
        return redirect()->route('collaborators.cars');
    }

    public function unActiveCar(Request $request, $carID)
    {
        $collaborator_id = auth()->user()->id;

        Car::where('id', $carID)->update([
            'reason' => $request->reason,
            'status' => 2
        ]);

        $user = User::select(['total_assign'])->find($collaborator_id);
        $total_assign = $user->total_assign - 1;
        if ($user->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $collaborator_id)->update([
            'total_assign' => $total_assign
        ]);

        return redirect()->route('collaborators.cars');
    }


}
