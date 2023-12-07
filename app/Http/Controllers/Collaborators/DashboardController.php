<?php

namespace App\Http\Controllers\Collaborators;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Demnad;
use App\Models\Reported;
use App\Models\Salon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard() {
        $collaborator_id = Auth::user()->id;
        $salon_count = Salon::where('collaborator_id', $collaborator_id)
        ->where('status', '!=', 0)->count();   
        
        $car_count = Car::where('collaborator_id', $collaborator_id)
        ->where('status', '!=', 0)
        ->count(); 

        $report_count = Reported::where('collaborator_id', $collaborator_id)
        ->where('status', '!=', 0)->count(); 

        $byCar_count = Demnad::where('collaborator_id', $collaborator_id)
        ->where('status', '!=', 0)  ->count();


        $efficiencyDay = $this->efficiencyDay();

        // dd($efficiencyDay['percentCar']);

        return view('collaborators.dashboard', compact(
            'salon_count',
            'car_count',
            'report_count',
            'byCar_count',
            'efficiencyDay'
        ));
    }

    public function efficiencyDay() {
        $collaborator_id = Auth::user()->id;

        // Tin bán xe
        $activeCar = Car::where([
            'collaborator_id' => $collaborator_id,
            'status' => 1
        ])->count();

        $totalCar = Car::where('collaborator_id', $collaborator_id)->count();

        $percentCar = round(($activeCar / $totalCar) * 100);

        // Tin mua xe
        $activeByCar = Demnad::where([
            'collaborator_id' => $collaborator_id,
            'status' => 1
        ])->count();
        
        $totalByCar = Demnad::where('collaborator_id', $collaborator_id)->count();
        $percentByCar = round(($activeByCar / $totalByCar) * 100);

        // Tố cáo
        $activeReport = Reported::where([
            'collaborator_id' => $collaborator_id,
            'status' => 1
        ])->count();

        $totalReport = Demnad::where('collaborator_id', $collaborator_id)->count();
        $percentReport = round(($activeReport / $totalReport) * 100);



        return [
            'percentCar' => $percentCar,
            'percentByCar' => $percentByCar,
            'percentReport' => $percentReport
        ];
        
    }
}
