<?php

namespace App\Http\Controllers\Collaborators;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function cars() {
        return view('collaborators.cars');
    }
}
