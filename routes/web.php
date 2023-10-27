<?php

use App\Http\Controllers\Client\CarController;
use App\Livewire\Brands;
use App\Livewire\FormSellCar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Livewire\PostBuyCar;
use App\Models\Demnad;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
  Route::get('/', 'index')->name('homepage');
});

Route::controller(CarController::class)->group(function () {
  Route::get('/dang-tin-ban-xe', 'sellCar');
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


// Route::post('payment', [CheckOutController::class, 'checkout'])->name('payment-vnpay');

// Route::get('handle-payment', [CheckOutController::class, 'handlePayment'])->name('handlePayment');


// Route::match(['GET','POST'],'/dang-tin-ban-xe',[CarController::class,'sellCar'])->name('sellCar');

Route::get('/dang-xe', [CarController::class, 'sellCar']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dang-tin-mua-xe', PostBuyCar::class)->middleware('auth');

Route::get('manage-post-buy-car', function () {
    return view('manage-post-buy-car');
});

Auth::routes();

Route::get('manage-post', function () {
    return view('manage-postings');
});
Route::get('push-news', function () {
    return view('push-news');
});

