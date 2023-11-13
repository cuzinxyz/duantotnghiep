<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TransactionsHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
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
            ->orderBy('expired_date', 'desc')
            ->first();

        // dd($check_expired_date);

        if (!$check_expired_date) {
            $buyVIP = true;

            // dd('đây là case user chưa mua gói tin');

            return view('user-settings.push-featured', compact('carInfo', 'buyVIP'));
        } else {

            $service = $check_expired_date;

            # nếu user đã đanwg kí dịch vụ và còn thời hạn
            # và còn lượt đẩy tin
            # thì có thể đẩy tin mới
            if ($service->remaining_push != 0) {
                # kiểm tra tin này đã đc đẩy hay ch?
                if (str_contains($service->car_id, $carID)) {
                    return redirect()->route('profile')->with('status', 'Bạn đã đẩy tin này rồi');
                }
                $buyVIP = false;

                // dd('đây là case user đã mua gói tin, và còn lượt đẩy tin');

                return view('user-settings.push-featured', compact('carInfo', 'buyVIP', 'service'));
            } else {
                # user đã đăng ký dịch vụ nhưng đã hết lượt đẩy tin, cho phép mua lượt đẩy tin mới
                $buyVIP = true;

                # kiểm tra xem tin đã được đẩy hay chưa
                if (str_contains($service->car_id, $carID)) {
                    return redirect()->route('profile')->with('status', 'Bạn đã đẩy tin này rồi');
                }
                // dd('đây là case user đã mua gói tin, nhưng đã hết lượt đẩy tin, allow mua gói mới');


                return view('user-settings.push-featured', compact('carInfo', 'buyVIP', 'service', 'check_expired_date'));
            }
            // dd($check_expired_date);
            # nếu đã đăng ký 1 dịch vụ nào đó khác, và vẫn còn thời hạn sử dụng.
        }
    }

    public function confirmPush(Request $request, $carID)
    {
        # kiểm tra xem user đã đăng ký 1 gói nào khác chưa, và còn lượt đẩy hay không?
        $valid = DB::table("purchased_service")
            ->where('user_id', auth()->id())
            ->where('expired_date', '>=', \Carbon\Carbon::now())
            ->orderBy('expired_date', 'desc')
            ->first();


        if (!$valid) {
            # TH: CHưa đăng kí gói tin nào
            $service = Service::findOrFail($request->service_id);

            $user = User::find(auth()->id());
            $user->account_balence -= $service->price;
            $user->service_id = $service->id;
            $user->expired_date = \Carbon\Carbon::now()->addDays($service->expiration_date);
            // dd($user);
            $user->save();

            TransactionsHistory::create([
                'user_id' => auth()->id(),
                'transaction_type' => 'mua gói: ' . $service->service_name,
                'amount' => $service->price,
                'balance_after_transaction' => $user->account_balence
            ]);

            $purchased_service = DB::table("purchased_service")
                ->insert([
                    'user_id' => auth()->id(),
                    'car_id' => $carID,
                    'service_id' => $service->id,
                    'remaining_push' => $service->number_of_pushes - 1,
                    'expired_date' => \Carbon\Carbon::now()->addDays($service->expiration_date),
                    'created_at' => \Carbon\Carbon::now(),
                    # chỗ này là lưu lại lịch sử mua gói tin lẻ
                ]);

            if ($purchased_service) {
                return redirect()->route('profile')->with('status', 'Mua gói '.$service->service_name.' & đẩy tin thành công!');
            }
        } else {
            # TH: Đã mua gói tin

            # kiểm tra xem còn lượt đẩy tin hay không
            if ($valid->remaining_push >= 0) {
                $purchased_service = DB::table("purchased_service")
                    ->where('user_id', auth()->id())
                    ->where('expired_date', '>=', \Carbon\Carbon::now())
                    ->orderBy('expired_date', 'desc')
                    ->first();

                # kiểm tra xem tin hiện tại được đâry chưa/
                if (str_contains($purchased_service->car_id, $carID)) {
                    return redirect()->route('profile')->with('status', 'Bạn đã đẩy tin này!');
                } else {
                    if($purchased_service->car_id) {
                        $purchased_service = DB::table("purchased_service")
                            ->where('user_id', auth()->id())
                            ->where('expired_date', '>=', \Carbon\Carbon::now())
                            ->orderBy('expired_date', 'desc')
                            ->update([
                                'car_id' => $purchased_service->car_id . ',' . $carID,
                                'remaining_push' => $purchased_service->remaining_push - 1,
                            ]);
                        return redirect()->route('profile')->with('status', 'Đẩy tin lên thành công!');
                    } else {
                        $purchased_service = DB::table("purchased_service")
                            ->where('user_id', auth()->id())
                            ->where('expired_date', '>=', \Carbon\Carbon::now())
                            ->orderBy('expired_date', 'desc')
                            ->update([
                                'car_id' => $purchased_service->car_id . ',' . $carID,
                                'remaining_push' => $purchased_service->remaining_push - 1,
                            ]);
                        return redirect()->route('profile')->with('status', 'Đẩy tin lên thành công!');
                    }
                }
            } else {
                return redirect()->route('service.list')->with('status', 'Bạn đã hết lượt đẩy tin, vui lòng mua dịch vụ VIP!');
            }
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

    public function rechargeMoney(Request $request)
    {
        $price = 0;
        if ($request->input("money")) {
            $price = $request->input("money");
        } elseif ($request->input("other-money")) {
            $price = $request->input("other-money");
        }
        Session::put('user_id', Auth::id());
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        # config
        $vnp_TmnCode = "E1R9YLZT"; //Website ID in VNPAY System
        $vnp_HashSecret = "LWYXHNCFHTXPEQEGZPKHJAVMJAYOZYNN"; //Secret key
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('resultRecharge');
        # time limit
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

        $vnp_TxnRef = time(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Nap dong Drivco"; //mô tả đơn hàng
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $price * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "NCB"; # fake
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $vnp_ExpireDate = $expire;
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $vnp_ExpireDate,
        );
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }
        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );

        if ($price != 0) {
            return redirect($vnp_Url);
        } else {
            echo json_encode($returnData);
        }

        // dd($request->all());
    }

    public function resultRecharge(Request $request)
    {
        // dd($request->all());
        if (!empty($request->vnp_ResponseCode) && $request->vnp_ResponseCode == 00) {
            $checkAvailableToken = TransactionsHistory::where('token', $request->vnp_SecureHash)->first();
            if ($checkAvailableToken) {
                session()->flash('status', 'Nếu thấy thông báo này, hãy liên hệ với admin!');
            } else {
                $userId = Session::get('user_id');
                $user = User::find($userId);
                $amount = $request->vnp_Amount / 100;
                $user->account_balence += $amount;
                $user->save();

                $transaction_history = [
                    'user_id' => Session::get('user_id'),
                    'transaction_type' => 'nạp tiền',
                    'amount' => $amount,
                    'balance_after_transaction' => $user->account_balence,
                    'token' => $request->vnp_SecureHash,
                ];
                TransactionsHistory::create($transaction_history);
                return redirect()->route('profile')->with('status', 'Nạp tiền thành công~!');
            }
        } else {
            return redirect()->route('profile')->with('status', 'Nếu thấy thông báo này, hãy liên hệ với admin!');
        }
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
                return redirect()->route('settings')->with('success', 'Cập nhật thông tin thành công!');
            }
        }
        return view('user-settings.settings', compact('user', 'err'));
    }

}
