<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
      $services = Service::all();

      return view('services.service',compact('services'));
    }

    public function detail($id)
    {
      $serv = Service::findOrFail($id);

      return view('services.service-detail', compact('serv'));
    }
}
