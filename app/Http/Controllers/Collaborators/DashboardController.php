<?php

namespace App\Http\Controllers\Collaborators;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Demnad;
use App\Models\Reported;
use App\Models\Salon;
use App\Models\Support;
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

        $support_count = Support::where('collaborator_id', $collaborator_id)
        ->where('status', '!=', 0)->count();


        $efficiencyDay = $this->efficiencyDay();

        return view('collaborators.dashboard', compact(
            'salon_count',
            'car_count',
            'report_count',
            'byCar_count',
            'support_count',
            'efficiencyDay'
        ));
    }

    public function efficiencyDay() {
        $collaborator_id = Auth::user()->id;

        // Tin bán xe
        $unActiveCar = Car::where([
            'collaborator_id' => $collaborator_id,
            'status' => 0
        ])->count();

        // Tin mua xe
        $unActiveByCar = Demnad::where([
            'collaborator_id' => $collaborator_id,
            'status' => 0
        ])->count();

        // Tố cáo
        $unActiveReport = Reported::where([
            'collaborator_id' => $collaborator_id,
            'status' => 0
        ])->count();


        $unActiveSalon = Salon::where([
            'collaborator_id' => $collaborator_id,
            'status' => 0
        ])->count();

        $unActiveSupport = Support::where([
            'collaborator_id' => $collaborator_id,
            'status' => 0
        ])->count();

        return [
            'unActiveCar' => $unActiveCar,
            'unActiveByCar' => $unActiveByCar,
            'unActiveReport' => $unActiveReport,
            'unActiveSalon' => $unActiveSalon,
            'unActiveSupport' => $unActiveSupport,
        ];
        
    }
}
