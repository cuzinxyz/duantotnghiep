<?php

namespace App\Http\Controllers;

use App\Events\WorkCollaboratorEvent;
use Carbon\Carbon;
use App\Models\Car;
use App\Models\PurchasedService;
use App\Models\User;
use GuzzleHttp\Client;
use App\Models\Service;
use App\Models\WithDraw;
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
        $cars = Car::where('user_id', auth()->id())
            ->where([
                'status' => 1,
                'salon_id' => null
            ])
            ->orderBy('created_at', 'desc')
            ->get();
        $pendingCars = Car::where('user_id', auth()->id())
            ->where([
                'status' => 0,
                'salon_id' => null
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        $deniedCars = Car::where('user_id', auth()->id())
            ->where([
                'status' => 2,
                'salon_id' => null
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        $hiddenCars = Car::onlyTrashed()
            ->where('user_id', auth()->id())
            ->get();

        $serviceId = DB::table('purchased_service')
            ->where('user_id', Auth::id())
            ->whereDate('expired_date', '>=', \Carbon\Carbon::now())
            ->orderBy('created_at', 'desc')
            ->select('service_id')
            ->first();

        $billHistories = null;
        if(!empty($serviceId)) {
            $billHistories = Service::where('id', $serviceId->service_id)
                ->orderBy('created_at', 'desc')
                ->first();
        }
        
        $purchased_service = PurchasedService::where('user_id', auth()->id())
            ->whereDate('expired_date', '>=', \Carbon\Carbon::now())
            ->orderBy('created_at', 'desc')
            ->first();

        return view('user-settings.profile', compact('cars', 'pendingCars', 'deniedCars', 'hiddenCars', 'billHistories', 'purchased_service'));
    }

    public function pushFeature($carID)
    {
        $carInfo = auth()->user()->car->find($carID);

        $purchased_service = DB::table("purchased_service")
            ->where('user_id', auth()->id())
            ->where('expired_date', '>=', Carbon::now())
            ->orderBy('expired_date', 'desc')
            ->get();

        // ->first();

        // $carids = collect($purchased_service)->unique();

        // // Chuyển đổi kết quả sang mảng và loại bỏ giá trị trống
        // $uniqueCarIdsArray = array_unique(explode(',', $purchased_service->implode(',')));

        // // Kết quả là một chuỗi chứa các giá trị car_id không trùng nhau
        // $result = implode(',', $uniqueCarIdsArray);

        // dd($purchased_service);

        if ($purchased_service->count() == 0) {
            $buyVIP = true;

            // dd('đây là case user chưa mua gói tin');

            return view('user-settings.push-featured', compact('carInfo', 'buyVIP'));
        } else {
            // dd('case nay` da mua');
            $services = $purchased_service;

            # nếu user đã đanwg kí dịch vụ và còn thời hạn
            # và còn lượt đẩy tin
            # thì có thể đẩy tin mới
            foreach ($services as $service) :
                if ($service->remaining_push != 0) {
                    # case này sẽ render ra trang để đẩy tin, vì còn lượt đẩy

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
                    // dd($service);
                    return view('user-settings.push-featured', compact('carInfo', 'buyVIP', 'service'));
                }
            endforeach;
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
            ->get();

        // dd($valid);
        if (($valid->count() == 0)) {
            # TH đã mua gói trước đó & còn hạn
            // if(!empty($valid) && $valid[0]->remaining_push == 0) {
            //     redirect('')
            // }
            # TH: CHưa đăng kí gói tin nào
            # tin lẻ
            $service = Service::findOrFail($request->service_id);

            $user = User::find(auth()->id());
            $user->account_balence -= $service->price;
            if ($user->account_balence < 0) {
                return redirect()->route('recharge')
                    ->with('warning', 'Số dư hiện tại của bạn không đủ để mua dịch vụ này, vui lòng nạp thêm!');
            }
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
                return redirect()->route('profile')->with('status', 'Mua gói ' . $service->service_name . ' & đẩy tin thành công!');
            }
        } else {
            # TH: Đã mua gói tin
            foreach ($valid as $pur_service) :
                # kiểm tra xem còn lượt đẩy tin hay không
                if ($pur_service->remaining_push > 0) {
                    # kiểm tra xem tin hiện tại được đẩy chưa/
                    if (str_contains($pur_service->car_id, $carID)) {
                        return redirect()->route('profile')->with('status', 'Bạn đã đẩy tin này!');
                    } else {
                        # tin hiện chưa được đẩy, thì sẽ đẩy tin mới vào gói đã mua đó
                        if ($pur_service->car_id) {
                            $update_pur_service = DB::table("purchased_service")
                                ->where('user_id', auth()->id())
                                ->where('expired_date', '>=', \Carbon\Carbon::now())
                                ->where('service_id', $pur_service->service_id)
                                ->orderBy('expired_date', 'desc')
                                ->update([
                                    'car_id' => $pur_service->car_id . ',' . $carID,
                                    'remaining_push' => $pur_service->remaining_push - 1,
                                ]);
                            return redirect()->route('profile')->with('status', 'Đẩy tin lên thành công!');
                        } else {
                            $update_pur_service = DB::table("purchased_service")
                                ->where('user_id', auth()->id())
                                ->where('expired_date', '>=', \Carbon\Carbon::now())
                                ->where('service_id', $pur_service->service_id)
                                ->orderBy('expired_date', 'desc')
                                ->update([
                                    'car_id' => $carID,
                                    'remaining_push' => $pur_service->remaining_push - 1,
                                ]);
                            return redirect()->route('profile')->with('status', 'Đẩy tin lên thành công!');
                        }
                    }
                } else {
                    // dd('here');
                    return redirect()->route('service.list')->with('status', 'Bạn đã hết lượt đẩy tin, vui lòng mua lại sau!');
                }
            endforeach;
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
        // thống kê tiền
        $currentBalance = User::where('id', Auth::id())
            ->pluck('account_balence')
            ->first();
        $moneySpending = TransactionsHistory::where('user_id', Auth::id())
            ->where('transaction_type', 'LIKE', '%mua gói%')
            ->pluck('amount', 'id')
            ->sum();
        $totalAmount = TransactionsHistory::where('user_id', Auth::id())
            ->where('transaction_type', 'LIKE', 'nạp tiền')
            ->pluck('amount', 'id')
            ->sum();


        // lịch sử thanh toán dịch vụ
        $serviceId = DB::table('purchased_service')
            ->where('user_id', Auth::id())
            ->pluck('service_id');
        $billHistories = Service::whereIn('id', $serviceId)
            ->get();
        // lịch sử nạp tiền
        $depositHistory = DB::table('transactions_histories')
            ->select('id', 'amount', 'created_at')
            ->where('user_id', auth()->id())
            ->where('transaction_type', 'LIKE', '%nạp tiền%')
            ->get();

        $withDrawHistory = DB::table('transactions_histories')
            ->select('id', 'amount', 'created_at')
            ->where('user_id', auth()->id())
            ->where('transaction_type', 'LIKE', '%rút tiền%')
            ->get();

        return view('user-settings.payment-history', compact('currentBalance', 'moneySpending', 'totalAmount', 'billHistories', 'depositHistory', 'withDrawHistory'));
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

    public function withdraw()
    {
        $client = new Client();

        // Thay đổi URL thành URL thực tế của API bạn muốn truy cập
        $response = $client->get('https://api.vietqr.io/v2/banks?utm_source=j2team&utm_medium=url_shortener&utm_campaign=bank-list-api');

        $dataAPI = json_decode($response->getBody(), true);
        return view('user-settings.withdraw', compact('dataAPI'));
    }

    public function withdrawMoney(Request $request)
    {
        // dd($request->all());
        $user_id = Auth::user()->id;
        $user_balance = User::find($user_id);

        if(intval($request->bank_price) > intval($user_balance->account_balence)) {
            return redirect()->back()->with('error', 'Số tiền bạn muốn rút quá lớn');
        }

        $resultWithdraw = WithDraw::create([
            'user_id' => $user_id,
            'bank_name' => $request->bank_name,
            'bank_price' => $request->bank_price,
            'bank_number' => $request->bank_number,
            'username' => $request->username
        ]);

        if ($resultWithdraw) {
            event(new WorkCollaboratorEvent($resultWithdraw));
            return redirect()->route('profile')->with('status', 'Đã gửi yêu cầu rút tiền, vui lòng chờ phản hồi~!');
        }
    }

    public function serviceExpired($id)
    {
        $expired_date = PurchasedService::where([
            'service_id' => $id,
            'user_id' => auth()->id(),
        ])
            ->orderBy('created_at', 'asc')
            ->first();

        $service = Service::find($id);
        $user = User::find($expired_date->user_id);
        if ($user->account_balence < $service->price) {
            return redirect()->back()->with('error', 'Tài khoản của bạn không đủ. Vui lòng nạp thêm tiền vào tài khoản');
        }
        $account_balence = intval($user->account_balence) - intval($service->price);

        User::where('id', $expired_date->user_id)->update([
            'account_balence' => $account_balence
        ]);
        $transaction_history = TransactionsHistory::create([
            'user_id' => $expired_date->user_id,
            'transaction_type' => 'dịch vụ: Gia hạn '. $service->service_name,
            'amount' => intval($service->price),
            'balance_after_transaction' => $account_balence
        ]);

        $expired_date->expired_date = Carbon::parse($expired_date->expires_date)->addDays($service->expiration_date);
        $expired_date->save();
        return redirect()->back()->with('success', 'Gia hạn gói tin thành công');
    }
    
    public function deleteService($serviceId) {
        $purchased_service = PurchasedService::where('user_id', auth()->id())
        ->where('service_id', $serviceId)
        ->whereDate('expired_date', '>=', Carbon::now())
        ->orderBy('created_at', 'DESC')
        ->first();
        
        if(!$purchased_service) {
            return redirect()->back()->with('error', 'Hủy gói tin thất bại');
        }

        $purchased_service->expired_date = Carbon::yesterday();
        $purchased_service->save();

        return redirect()->back()->with('success', 'Hủy gói tin thành công');
    }
}
