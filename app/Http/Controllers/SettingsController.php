<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function profile() {
        return view('user-settings.profile');
    }

    public function pushItem() {
        return view('user-settings.push-item');
    }

    public function managerPostingsBuyCar() {
        return view('user-settings.manage-post-buy-car');
    }

    public function infoUser() {
        return view('user-settings.info-user');
    }

    public function recharge() {
        return view('user-settings.nap-tien');
    }

    public function paymentHistory() {
        return view('user-settings.payment-history');
    }

    public function settings() {
        return view('user-settings.settings');
    }
}
