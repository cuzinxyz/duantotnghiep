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

    public function addToWishlist($car_id)
    {
        dd($car_id);
        // if (Auth::check()) {
        //     $exists = Wishlist::where('user_id', Auth::id())->where('car_id', $car_id)->first();
        //     if (!$exists) {
        //         Wishlist::insert([
        //             'user_id' => Auth::id(),
        //             'car_id' => $car_id,
        //             'created_at' => Carbon::now(),
        //         ]);
        //         return response()->json(['success' => 'Tin đã được thêm vào danh sách theo dõi']);
        //     } else {
        //         return response()->json(['error' => 'Tin này đã có trong danh sách theo dõi']);
        //     }
        // } else {
        //     return response()->json(['error' => 'Bạn cần đăng nhập để thực hiện chức năng này']);
        // }
    }
}
