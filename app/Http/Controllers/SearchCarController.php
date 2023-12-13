<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchCarController extends Controller
{
    //
    public function index()
    {
        return view('searchcar.view-searchcar');
    }
}
