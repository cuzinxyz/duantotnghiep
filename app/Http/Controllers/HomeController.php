<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Car;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\News;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index()
    {
        $carIds = DB::table('purchased_service')
            ->where('expired_date', '>=', Carbon::now())
            ->whereNotNull('car_id') // Đảm bảo không có giá trị null
            ->select('car_id')
            ->get()
            ->pluck('car_id')
            ->flatMap(function ($carId) {
                return explode(',', $carId);
            })
            ->filter()
            ->unique()
            ->values()
            ->toArray();
        // Lấy 12 phần tử ngẫu nhiên trùng với các ID đã đẩy tin
        $featured_cars = Car::whereIn('id', $carIds)
            ->where('status', 1)
            ->inRandomOrder()
            ->limit(12)
            ->get();
        // Kiểm tra nếu số lượng kết quả ít hơn 12
        if ($featured_cars->count() < 12) {
            // Số lượng còn thiếu để đạt đến 12
            $remainingCount = 12 - $featured_cars->count();
            // Lấy thêm các Car khác ngẫu nhiên để đạt đến tổng cộng 12
            $additional_cars = Car::whereNotIn('id', $featured_cars->pluck('id'))
                ->where('status', 1)
                ->inRandomOrder()
                ->limit($remainingCount)
                ->get();
            // Thêm các Car khác vào mảng kết quả
            $featured_cars = $featured_cars->merge($additional_cars);
        }
        // dd($featured_cars);
        $mark = false;
        $banners = Banner::all();
        if ($banners->isEmpty()) {
            $banners = [
                ['image_url' => '/images/home5-banner-img-01.png'],
                ['image_url' => '/images/home5-banner-img-03.png'],
                ['image_url' => '/images/home5-banner-img-02.png'],
            ];
            $banners = array_map(function ($item) {
                return (object) $item;
            }, $banners);
            $mark = true;
        }
        # news data
        $posts = News::where('isPublished', 1)
            ->limit(3)
            ->get();
        $brands = Brand::all();

        # partners
        $partners = Partner::all();

        $adsPartners = Ads::where('priority', 1)
            ->inRandomOrder()
            ->limit(1)
            ->get();

        return view('index', compact('banners', 'mark', 'featured_cars', 'posts', 'brands', 'partners', 'adsPartners'));
    }

}
