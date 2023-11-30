<?php

use App\Models\Car;
use App\Models\News;
use App\Models\Service;
use App\Livewire\Showroom;
use App\Livewire\SearchCar;
use App\Livewire\CarListingSystem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Livewire\SingleBrandCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WishlishController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\SearchCarController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\SendGuideRequestController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
});

Route::middleware(['auth'])->group(function () {

    Route::controller(CarController::class)->group(function () {
        Route::get('/dang-tin-ban-xe', 'sellCar')->name('sellCar');
        Route::get('/sua-tin-ban-xe/{carID}', 'editSellCar')->name('editSellCar');
        Route::get('/an-xe/{carID}', 'removeCar')->name('hiddenCar');
        Route::get('/dang-tin-mua-xe', 'buyCar')->name('buyCar');
        Route::get('/danh-sach-tin-mua', 'listSellCar')->name('searchPost');
    });

    Route::controller(GarageController::class)->group(function(){
        Route::match(['GET','POST'],'/dangki-garage','ownGarage')->name('dangki-garage');
        Route::match(['GET','POST'],'/suathongtinxe/{id}','editCarGarage')->name('editcargarage');
        Route::get('/them-xe-garage/{garage_id}', 'addCar')->name('addCar');
        Route::get('/xoa-xe/{carID}', 'removeCar')->name('hiddenCarGarage');
        Route::get('/garage','garage')->name('garage');
    });

    Route::controller(CheckOutController::class)->group(function () {
        # payment
        Route::post('/payment/{idService}', 'checkout')->name('payment-vnpay');
        # result after payment
        Route::get('/ket-qua', 'result')->name('resultAfterPayment');
    });

    Route::controller(SettingsController::class)->group(function () {
        Route::get('/profile', 'profile')->name('profile');

        Route::get('/day-tin/{carID}', 'pushFeature')->name('day-tin');
        Route::post('/day-tin/{carID}', 'confirmPush')->name('confirmPush');

        Route::get('/quan-ly-tin-mua', 'needBuy');
        # cái này cần sửa lại
        Route::get('/thong-tin', 'infoUser');
        Route::get('/nap-tien', 'recharge')->name('recharge');
        Route::post('/nap-tien', 'rechargeMoney')->name('recharge.submit');

        Route::get('/rut-tien', 'withdraw')->name('withdraw');
        Route::post('/rut-tien', 'withdrawMoney')->name('withdraw.submit');

        Route::get('/ket-qua-nap-tien', 'resultRecharge')->name('resultRecharge');
        Route::get('/lich-su-nap-tien', 'paymentHistory')->name('paymentHistory');

        Route::match(['get', 'post'], '/cai-dat', 'settings')->name('settings');
    });

    Route::controller(WishlishController::class)->group(function () {
        Route::get('/yeu-thich', 'index')->name('wishlish');
    });

    Route::get('logout', function () {
        Auth::logout();
        return redirect()->route('homepage');
    });

    Route::controller(SendGuideRequestController::class)->group(function(){
        Route::get('/send-guide-request', 'SendGuideRequest')->name('guideRequest');
    });
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/dich-vu', 'index')->name('service.list');
    Route::get('/dich-vu/{idService}', 'detail')->name('service.detail')->middleware('auth');
});

# Posts Route
Route::get("/bai-viet", function() {
    $posts = News::all();

    if(!$posts) {
        abort(404);
    }

    return view('news.list', [
        'posts' => $posts
    ]);
});

Route::get("/bai-viet/{slug}.html", function ($slug) {
    $post = News::where('slug', $slug)->first();

    if (!$post) {
        abort(404);
    }
    return view('news.detail', [
        'post' => $post
    ]);
})->name('news.index');

Route::get('/hang-xe/{slug?}', SingleBrandCategory::class)->name('brand.detail');

Route::get('/xe', CarListingSystem::class)->name('car.list');

Route::controller(SearchCarController::class)->group(function () {
    Route::get('/tim-xe', 'index')->name('searchcar');
});

Auth::routes();

// Trang chi tiết xe
Route::controller(CarDetailController::class)->group(function () {
    Route::get('/xe/{slug}', 'index')->name('car-detail');
});

// Showroom
Route::get('/showroom', Showroom::class);
