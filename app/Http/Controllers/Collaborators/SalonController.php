<?php

namespace App\Http\Controllers\Collaborators;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Salon;
use App\Models\ChMessage;
use App\Mail\SendMailSalon;
use Illuminate\Http\Request;
use App\Models\TransactionsHistory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Events\SalonCollaboratorEvent;
use Yajra\DataTables\Facades\DataTables;

class SalonController extends Controller
{
    public function listSalon() {
        return view('collaborators.salons.salons');
    }

    public function salonData() {

        $collaborator_id = Auth::user()->id;
        $salons = Salon::select(['id', 'salon_name', 'address', 'user_id', 'created_at'])
        ->where([
            'collaborator_id' => $collaborator_id,
            'status' => 0
        ])
        ->orderBy('created_at', 'desc')
        ->get();

        return DataTables::of($salons)
            ->addColumn(
                'view',
                function($salon) {
                    return '<a href="' . route('collaborators.salonDetail', $salon->id) . '" class="btn btn-warning">Xem chi tiết</a>';
                }
            )
            ->editColumn(
                'created_at',
                function ($salon) {
                    return Carbon::parse($salon->created_at)->diffForHumans();
                }
            )
            ->editColumn(
                'username',
                function ($salon) {
                    return $salon->user->name;
                }
            )
            ->rawColumns(['view'])
            ->toJson();
    }

    public function salonDetail($id) 
    {
        $salon = Salon::where('id', $id)->first();

        return view('collaborators.salons.detail', compact('salon'));
    }

    public function activeSalon($salonID) {
        $salon = Salon::find($salonID);
        $bot = User::where('name', 'BOT')->first();
        $user = User::find($salon->user_id);

        
        // Cập nhật lại tổng công việc của nhân viên
        $collaborator = User::find($salon->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }
        $collaborator['total_assign'] = $total_assign;
        $collaborator->save();

        if (intval($user->account_balence) < intval(300000)) {
            $salon['status'] = 2;
            $salon->save();
            $reason = 'Chào bạn ' . $user->name . ',
            Yêu cầu mở cửa hàng của bạn đã không được chấp nhận,
            Vì lý do số dư tài khoản của bạn không đủ.
            Bạn vui lòng nạp thêm tiền vào tài khoản và yêu cầu mở lại dịch vụ.
            Trân trọng cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của chúng tôi.';

            ChMessage::create([
                'from_id' => $bot->id,
                'to_id' => $salon->user_id,
                'body' => $reason
            ]);


            return 0;
        }

        // Cập nhật trạng thái salon
        $salon->status = 1;
        $salon->expired_date = Carbon::now()->addDays(30);
        $salon->save();
        $account_balence = intval($user->account_balence) - intval(300000);
        User::where('id', $salon->user_id)->update([
            'account_balence' => $account_balence
        ]);
        
        $resultWithdraw = TransactionsHistory::create([
            'user_id' => $salon->user_id,
            'transaction_type' => 'dịch vụ: Mở của hàng',
            'amount' => intval(300000),
            'balance_after_transaction' => $account_balence
        ]);

        // Gửi thông báo cho khách hàng 
        $reason = 'Chào bạn ' . $user->name . ',
            Yêu cầu mở cửa hàng của bạn đã được chấp nhận,
            Phí duy trì của hàng mỗi tháng của bạn là 300.000 VNĐ
            Hiện tại bạn có thể vào cửa hàng của mình để sử dụng dịch vụ của chúng tôi.
            Trân trọng cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của chúng tôi.';

        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $salon->user_id,
            'body' => $reason
        ]);

        Mail::to($salon->user->email)->later(now()->addSeconds(5), new SendMailSalon($salon));
        return redirect()->route('collaborators.salons');

    }


    public function unActiveSalon(Request $request, $salonID) {
        // Cập nhật trạng thái cửa hàng
        $salon =  Salon::find($salonID);
        $salon->reason = $request->reason;
        $salon->status = 2;
        $salon->save();


        // Cập nhật số công việc nhân viên
        $collaborator = User::select(['total_assign'])->find($salon->collaborator_id);
        $total_assign = $collaborator->total_assign - 1;
        if ($collaborator->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $salon->collaborator_id)->update([
            'total_assign' => $total_assign
        ]);

        // Gửi thông báo khách hàng
        $reason = 'Chào bạn ' . $salon->user->name . ',
            Yêu cầu mở cửa hàng của bạn không được chấp nhận,
            Vì lý do: ' . $request->reason . ' .
            Nếu có thắc mắc vui lòng liên hệ với chúng tôi.
            Trân trọng cảm ơn.';

        $bot = User::where('name', 'BOT')->first();
        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $salon->user_id,
            'body' => $reason
        ]);

        Mail::to($salon->user->email)->later(now()->addSeconds(5), new SendMailSalon($salon));

        return redirect()->route('collaborators.cars');
    }
}
