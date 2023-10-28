<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CarController extends Controller
{
  public function sellCar()
  {
    return view("user-form.form-sell-car");
  }

  public function buyCar()
  {
    return view("user-form.form-buy-car");
  }
}
