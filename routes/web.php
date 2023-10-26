<?php

use App\Livewire\FormSellCar;
use App\Http\Controllers\HomeController;
use App\Models\Car;
use Illuminate\Support\Facades\DB;
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

Route::get('dang-tin-ban-xe', function () {
    return view('form-sell-car');
});
  
// Route::get('/goi-tin', function() {
//     DB::enableQueryLog();
//     $car = Car::find(1)->service()->get();
//     $ser = $car->service;
//     dd($car);
//     dd(DB::getQueryLog());
// });