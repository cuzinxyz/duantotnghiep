<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // $services = Service::whereNotIn('service_name', Service::where('service_name', 'LIKE', '%gói tin lẻ%')->get()->toArray())
        //     ->get();

        $services = Service::where('service_name', 'LIKE', '%gói tin lẻ%')->get()->toArray();
        // $services = array_values($servicesList);
dd($services);
        return view('services.service', compact('services'));
    }

    public function detail($id)
    {
        $serv = Service::findOrFail($id);

        return view('services.service-detail', compact('serv'));
    }
}
