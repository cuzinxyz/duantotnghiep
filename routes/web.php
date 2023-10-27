<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Livewire\PostBuyCar;
use App\Models\Demnad;
use Illuminate\Support\Facades\Auth;
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


Route::get('/info', [HomeController::class, 'info']);

Route::get('/dang-tin-ban-xe', function () {
    return view('form-sell-car');
});

Route::get('/', function () {
    return view('index');
});

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
