<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendGuideRequestController extends Controller
{
    public function SendGuideRequest(){
        return view('modals.guide-modal');
    }
    //
}
