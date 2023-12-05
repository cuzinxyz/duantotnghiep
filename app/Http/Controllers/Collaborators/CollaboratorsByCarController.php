<?php

namespace App\Http\Controllers\Collaborators;

use Carbon\Carbon;
use App\Models\Demnad;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class CollaboratorsByCarController extends Controller
{
    public function listByCar()
    {
        return view('collaborators.bycars.bycars');
    }

    public  function byCarData()
    {

        $collaborator_id = auth()->user()->id;

        $demnads = Demnad::select(['id', 'user_id', 'title', 'content', 'created_at'])
            ->where([
                'status' => 0,
                'collaborator_id' => $collaborator_id
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        return DataTables::of($demnads)
            ->addColumn(
                'view',
                function ($demnad) {
                    return '<a href="' . route('collaborators.byCarDetail', $demnad->id) . '" class="btn btn-warning">Xem chi tiết</a>';
                }
            )
            ->editColumn(
                'created_at',
                function ($demnad) {
                    return Carbon::parse($demnad->created_at)->diffForHumans();
                }
            )
            ->editColumn(
                'username',
                function ($demnad) {
                    return $demnad->user->name;
                }
            )
            ->rawColumns(['view'])
            ->toJson();
    }

    public function byCarDetail($id)
    {
        $demnad = Demnad::find($id);
        return view('collaborators.bycars.detail', compact('demnad'));
    }
}
