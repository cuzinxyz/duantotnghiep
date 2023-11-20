<?php

use App\Models\News;
use App\Models\Service;
use App\Livewire\CarListingSystem;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
});

Route::middleware(['auth'])->group(function () {

    Route::controller(CarController::class)->group(function () {
        Route::get('/dang-tin-ban-xe', 'sellCar')->name('sellCar');

        Route::get('/an-xe/{carID}', 'removeCar')->name('hiddenCar');

        Route::get('/dang-tin-mua-xe', 'buyCar')->name('buyCar');
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
});


Route::controller(ServiceController::class)->group(function () {
    Route::get('/dich-vu', 'index')->name('service.list');
    Route::get('/dich-vu/{idService}', 'detail')->name('service.detail')->middleware('auth');
});

# Posts Route
Route::get("/bai-viet/{slug}.html", function($slug) {
    $post = News::where('slug', $slug)->first();

    if(!$post) {
        abort(404);
    }
    return view('news.detail', [
        'post' => $post
    ]);
})->name('news.index');

Route::get('/single-category', SingleBrandCategory::class)->name('brand.detail');

Route::get('/xe', CarListingSystem::class)->name('car.list');

Route::get('/testt', function () {

    // $service = Service::find(11);

    // dd($service);
    // $array = preg_split("/\r\n|\n|\r/", $service['description']);

    // return $array;
});

Auth::routes();

// Trang chi tiết xe
Route::controller(CarDetailController::class)->group(function () {
    Route::get('/xe/{slug}', 'index')->name('car-detail');
});


