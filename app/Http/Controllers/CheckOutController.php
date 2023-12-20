<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\TransactionsHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
    public function checkout(Request $request, $serviceID)
    {
        $purchased_sev = DB::table("purchased_service")
            ->where('user_id', auth()->id())
            ->where('expired_date', '>=', \Carbon\Carbon::now())
            ->orderBy('expired_date', 'desc')
            ->first();

        // dd($purchased_sev);

        if($purchased_sev) {
            return redirect()
                ->route('profile')
                ->with('status', 'Bạn đã đăng ký 1 gói dịch vụ trước đó, khi hết hạn gói cũ bạn có thể mua gói mới.');
        }


        $service = Service::findOrFail($serviceID);
        # thanh toán bằng số dư tài khoản
        if ($request->input('payment-method') == 'balance') {
            $user = User::findOrFail(auth()->id());
            $user->service_id = $service->id;
            $user->account_balence -= $service->price;
            if($user->account_balence < 0) {
                return redirect()->route('recharge')
                    ->with('warning', 'Số dư hiện tại của bạn không đủ để mua dịch vụ này, vui lòng nạp thêm!');
            }
            $user->expired_date = Carbon::now()->addDays($service->expiration_date);
            # save database
            $purchased = DB::table('purchased_service')
                ->insert([
                    'user_id' => $user->id,
                    'service_id' => $service->id,
                    'remaining_push' => $service->number_of_pushes,
                    'expired_date' => $user->expired_date,
                    'created_at' => Carbon::now()
                ]);
            # lịch sử trừ tiền mua gói dvu.
            $user->save();
            TransactionsHistory::create([
                'user_id' => auth()->id(),
                'transaction_type' => 'mua gói: ' . $service->service_name,
                'amount' => $service->price,
                'balance_after_transaction' => $user->account_balence
            ]);

            return redirect()->route('profile')->with('status', 'Đăng ký gói ' . $service->service_name . ' thành công!');
        }

        if (empty($service)) {
            return redirect()->back()->with('status', 'Không tồn tại dịch vụ này!');
        }
        Session::put('purchased_service', $service);
        Session::put('user_id', Auth::id());

        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        # config
        $vnp_TmnCode = "E1R9YLZT"; //Website ID in VNPAY System
        $vnp_HashSecret = "LWYXHNCFHTXPEQEGZPKHJAVMJAYOZYNN"; //Secret key
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('resultAfterPayment');
        # time limit
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

        $vnp_TxnRef = time(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toan tien dang ky dich vu " . $service->service_name . " voi gia " . $service->price . ""; //mô tả đơn hàng
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $service->price * 100;
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

        if ($service) {
            return redirect($vnp_Url);
        } else {
            echo json_encode($returnData);
        }
    }

    public function result(Request $request)
    {
        if (!empty($request->vnp_ResponseCode) && $request->vnp_ResponseCode == 00) {
            $checkAvailableToken = TransactionsHistory::where('token', $request->vnp_SecureHash)->first();
            if ($checkAvailableToken) {
                session()->flash('status', 'Nếu thấy thông báo này hãy liên hệ với Admin!');
            } else {
                $userId = Session::get('user_id');
                $purchased_service = Session::get('purchased_service');
                $amount = $request->vnp_Amount / 100;
                # user registed service
                $user = User::find($userId);
                $user->service_id = $purchased_service->id;
                $user->account_balence += $amount;
                $user->expired_date = Carbon::now()->addDays($purchased_service->expiration_date);
                # save database
                $purchased = DB::table('purchased_service')
                    ->insert([
                        'user_id' => $userId,
                        'service_id' => $purchased_service->id,
                        'remaining_push' => $purchased_service->number_of_pushes,
                        'expired_date' => $user->expired_date,
                        'created_at' => Carbon::now()
                    ]);
                # lưu lịch sử nạp tiền
                TransactionsHistory::create([
                    'user_id' => Session::get('user_id'),
                    'transaction_type' => 'nạp tiền mua gói dịch vụ',
                    'amount' => $amount,
                    'balance_after_transaction' => $user->account_balence,
                    'token' => $request->vnp_SecureHash,
                ]);
                # lịch sử trừ tiền mua gói dvu.
                $user->account_balence -= $purchased_service->price;
                $user->save();
                TransactionsHistory::create([
                    'user_id' => auth()->id(),
                    'transaction_type' => 'mua gói: ' . $purchased_service->service_name,
                    'amount' => $purchased_service->price,
                    'balance_after_transaction' => $user->account_balence
                ]);

                return redirect()->route('profile')->with('status', 'Đăng ký gói ' . $purchased_service->service_name . ' thành công!');
            }
        } else {
            session()->flash('status', 'Lỗi r nhé');
        }

        return view('services.result');
    }
}
