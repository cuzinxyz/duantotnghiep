<?php

namespace App\Http\Controllers\Collaborators;

use App\Events\SalonCollaboratorEvent;
use Carbon\Carbon;
use App\Models\Salon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class SalonController extends Controller
{
    public function listSalon() {
        return view('collaborators.salons.salons');
    }

    public function salonData() {

        $collaborator_id = Auth::user()->id;
        $salons = Salon::select(['id', 'salon_name', 'address', 'user_id', 'created_at'])
        ->where([
            'collaborator_id' => $collaborator_id,
            'status' => 0
        ])
        ->orderBy('created_at', 'desc')
        ->get();

        return DataTables::of($salons)
            ->addColumn(
                'view',
                function($salon) {
                    return '<a href="' . route('collaborators.salonDetail', $salon->id) . '" class="btn btn-warning">Xem chi tiết</a>';
                }
            )
            ->editColumn(
                'created_at',
                function ($salon) {
                    return Carbon::parse($salon->created_at)->diffForHumans();
                }
            )
            ->editColumn(
                'username',
                function ($salon) {
                    return $salon->user->name;
                }
            )
            ->rawColumns(['view'])
            ->toJson();
    }

    public function salonDetail($id) 
    {
        $salon = Salon::where('id', $id)->first();

        return view('collaborators.salons.detail', compact('salon'));
    }

    public function activeSalon($salonID) {
        $salon = Salon::find($salonID);
        event(new SalonCollaboratorEvent($salon), ['CarCollaboratorListener']);

        return redirect()->route('collaborators.salons');

    }


    public function unActiveSalon($salonID) {}
}
