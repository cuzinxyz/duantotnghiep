<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\Client\ListingSystemController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
});

Route::controller(CarController::class)->group(function () {
    Route::get('/dang-tin-ban-xe', 'sellCar')->name('sellCar');
    Route::get('/dang-tin-mua-xe', 'buyCar')->name('buyCar');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/danh-sach-dich-vu', 'index');
    Route::get('/dich-vu/{idService}', 'detail')->name('service.detail');
});

Route::controller(CheckOutController::class)->group(function () {
    # payment
    Route::post('/payment', 'checkout')->name('payment-vnpay');
    # result after payment
    Route::get('/ket-qua', 'result')->name('resultAfterPayment');
});

Route::controller(SettingsController::class)->group(function () {
    Route::get('/cai-dat', 'settings')->name('settings');
    Route::get('/quan-ly-tin-dang', 'managePostings');
    Route::get('/day-tin', 'pushItem');
    Route::get('/quan-ly-tin-mua', 'managerPostingsBuyCar');
    # cái này cần sửa lại
    Route::get('/thong-tin', 'infoUser');
    Route::get('/nap-tien', 'recharge')->name('recharge');
    Route::get('/lich-su-nap-tien', 'paymentHistory')->name('paymentHistory');
});

Route::get('/danh-sach-xe', CarListingSystem::class);

Auth::routes();
