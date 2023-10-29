<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TransactionsHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
   public function checkout(Request $request)
   {
      if ($request->total_price)
      {
         $request->total_price = $request->total_price * 1000;

         Session::put('id_service', $request->id_service);
         Session::put('user_id', Auth::id());

         error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
         # config
         $vnp_TmnCode = "DL0EA7AJ"; //Website ID in VNPAY System
         $vnp_HashSecret = "GOGAQDDKQGSHOENQIKCHZBMXCIZBQVXJ"; //Secret key
         $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
         $vnp_Returnurl = route('resultAfterPayment') . "?msg=success";
         # time limit
         $startTime = date("YmdHis");
         $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

         $vnp_TxnRef = time(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
         $vnp_OrderInfo = "Thanh-toan-don-hang"; //mô tả đơn hàng
         $vnp_OrderType = "billpayment";
         $vnp_Amount = $request->total_price * 100;
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
         if ($request->total_price) {
            return redirect($vnp_Url);
         } else {
            echo json_encode($returnData);
         }
      }
   }

   public function result(Request $request)
   {
      if(!empty($request->vnp_ResponseCode) && $request->vnp_ResponseCode == 00)
      {
         $checkAvailableToken = TransactionsHistory::where('token', $request->vnp_SecureHash)->first();
         if($checkAvailableToken) {
            session()->flash('status', 'Mày thích bố láo không?');
         } else {
            $userId = Session::get('user_id');

            $user = User::find($userId);

            $user->account_balence += $request->vnp_Amount;
            $user->save();

            $transaction_history = [
               'user_id' => Session::get('user_id'),
               'transaction_type' => 'nạp tiền',
               'amount' => $request->vnp_Amount,
               'balance_after_transaction' => $user->account_balence,
               'token' => $request->vnp_SecureHash,
            ];
            TransactionsHistory::create($transaction_history);

            session()->flash('status', 'Nạp tiền thành công');
         }
      } else {
         session()->flash('status', 'Lỗi r nhé');
      }

      return view('services.result');
   }
}
