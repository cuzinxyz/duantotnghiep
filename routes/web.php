<?php

use App\Http\Controllers\Client\CarController;
use App\Livewire\Brands;
use App\Livewire\FormSellCar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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


Route::get('/info', [HomeController::class, 'info']);


Route::match(['GET','POST'],'/dang-tin-ban-xe',[CarController::class,'sellCar'])->name('sellCar');

Route::get('/', function() {
    return view('index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('manage-post', function () {
    return view('manage-postings');
});
Route::get('push-news', function () {
    return view('push-news');
});
