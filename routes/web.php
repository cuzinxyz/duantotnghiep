<?php

use App\Http\Controllers\Client\CarController;
use App\Livewire\Brands;
use App\Livewire\FormSellCar;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Controllers\HomeController::class)->name('/');

Route::get('/info', [HomeController::class, 'info']);

// Route::get('dang-tin-ban-xe', function () {
//     return view('form-sell-car');
// });

Route::match(['GET','POST'],'/dang-tin-ban-xe',[CarController::class,'sellCar'])->name('sellCar');
