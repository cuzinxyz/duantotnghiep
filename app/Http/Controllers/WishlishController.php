<?php

namespace App\Http\Controllers;

class WishlishController extends Controller
{
    public function index()
    {
        return view('wishlist.view-wishlist');
    }
}
