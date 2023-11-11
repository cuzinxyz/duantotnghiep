<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy danh sách ID đã lấy gần đây từ cookie
        $recentIds = json_decode(Cookie::get('recent_ids', '[]'), true);

        // Lấy số lượng dữ liệu từ database
        $count = DB::table('cars')->count();

        if ($count > 5) {
            // Lấy 5 phần tử ngẫu nhiên không trùng với các ID gần đây
            $featured_cars = DB::table('cars')
                ->whereNotIn('id', $recentIds)
                ->inRandomOrder()
                ->limit(5)
                ->get();

            // Cập nhật danh sách ID gần đây
            $recentIds = array_slice(array_merge($recentIds, $featured_cars->pluck('id')->toArray()), -5);

            // Lưu danh sách ID gần đây vào cookie trong vòng 1 giờ
            Cookie::queue('recent_ids', json_encode($recentIds), 60);
        } else {
            // Nếu dữ liệu <= 5 thì không áp dụng điều kiện trên
            $featured_cars = DB::table('cars')->inRandomOrder()->limit(5)->get();
        }

        // $featured_cars = Car::where('recommended', 1)->get();



        $mark = false;
        $banners = Banner::all();

        if ($banners->isEmpty()) {
            $banners = [
                ['image_url' => '/images/home5-banner-img-03.png'],
                ['image_url' => '/images/home5-banner-img-02.png'],
            ];

            $banners = array_map(function ($item) {
                return (object) $item;
            }, $banners);
            $mark = true;
        }

        // dd($featured_cars);

        return view('index', compact('banners', 'mark', 'featured_cars'));
    }
}
