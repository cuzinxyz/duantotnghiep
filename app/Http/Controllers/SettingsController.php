<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function managePostings()
    {
        return view('user-settings.quan-ly-tin-dang');
    }

    public function pushItem()
    {
        return view('user-settings.push-item');
    }

    public function managerPostingsBuyCar()
    {
    }

    public function profile()
    {
        $cars = auth()->user()->car;

        return view('user-settings.profile', compact('cars'));
    }

    public function pushFeature($carID)
    {
        $carInfo = auth()->user()->car->find($carID);

        $check_expired_date = DB::table("purchased_service")
            ->where('user_id', auth()->id())
            ->where('expired_date', '>=', Carbon::now())
            ->first();

        if (!$check_expired_date) {
            $buyVIP = true;

            return view('user-settings.push-featured', compact('carInfo', 'buyVIP'));
        } else {
            $buyVIP = false;

            $service = $check_expired_date;
            // dd($check_expired_date);
            # nếu đã đăng ký 1 dịch vụ nào đó khác, và vẫn còn thời hạn sử dụng.
            return view('user-settings.push-featured', compact('carInfo', 'buyVIP', 'service'));
        }

        // return view('user-settings.push-featured', compact('carInfo'));
    }

    public function confirmPush($carID)
    {
        $purchased_service = DB::table("purchased_service")
            ->where('user_id', auth()->id())
            ->where('expired_date', '>=', Carbon::now())
            ->update([
                'car_id' => $carID
            ]);

        if ($purchased_service) {
            return redirect()->route('profile')->with('status', 'Đẩy tin thành công!');
        }
    }

    public function needBuy()
    {
        return view('user-settings.manage-post-buy-car');
    }

    public function infoUser()
    {
        return view('user-settings.info-user');
    }

    public function recharge()
    {
        return view('user-settings.nap-tien');
    }

    public function paymentHistory()
    {
        return view('user-settings.payment-history');
    }

    public function settings(Request $request)
    {
        $id = Auth::user()->id;
        $user = DB::table('users')->where('id', $id)->first();
        $err = '';
        $data = [];
        // dd($user);
        if ($request->isMethod('POST')) {
            if ($request->phone_number) {
                $data['phone_number'] = $request->phone_number;
            }
            if ($request->name) {
                $data['name'] = $request->name;
            }
            if ($request->password) {
                $password = $request->password;
                if ($request->confirm != $password) {
                    $err = 'The password confirm does not match';
                } else {
                    $data['password'] = Hash::make($password);
                }
            }
            if ($request->avatar) {
                $data['avatar'] = uploadFile('avatars/users', $request->file('avatar'));
            }
            if (empty($err)) {
                // dd($data);
                $result = User::where('id', $id)->update($data);
                return redirect('cai-dat');
            }
        }
        return view('user-settings.settings', compact('user', 'err'));
    }

    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;
        $user = DB::table('users')->where('id', $id)->first();
        dd($user);
    }
}
