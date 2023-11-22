<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlishController extends Controller
{
    public function index()
    {
        return view('wishlist.view-wishlist');
    }
}
