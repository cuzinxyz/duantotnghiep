<?php

namespace App\Listeners;

use Carbon\Carbon;
use App\Models\User;
use App\Models\ChMessage;
use App\Models\TransactionsHistory;
use App\Events\SalonCollaboratorEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActiveSalonListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SalonCollaboratorEvent $event): void
    {
        $event->data->status = 1;
        $event->data->expired_date = Carbon::now()->addDays(30);
        $event->data->save();

        $bot = User::where('name', 'BOT')->first();
        $user = User::where('id', $event->data->user_id)->first();

        $account_balence = intval($user->account_balence) - intval(300000);

        $resultWithdraw = TransactionsHistory::create([
            'user_id' => $event->data->user_id,
            'transaction_type' => 'dịch vụ: Mở của hàng',
            'amount' => intval(300000),
            'balance_after_transaction' => $account_balence
        ]);

        User::where('id', $event->data->user_id)->update([
            'account_balence' => $account_balence
        ]);

        $reason = 'Chào bạn ' . $user->name . ',
            Yêu cầu mở cửa hàng của bạn đã được chấp nhận,
            Phí duy trì của hàng mỗi tháng của bạn là 300.000 VNĐ
            Hiện tại bạn có thể vào cửa hàng của mình để sử dụng dịch vụ của chúng tôi.
            Trân trọng cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của chúng tôi.';

        ChMessage::create([
            'from_id' => $bot->id,
            'to_id' => $event->data->user_id,
            'body' => $reason
        ]);



        // Cập nhật lại tổng công việc của nhân viên
        $collaborator = User::find($event->data->collaborator_id);
        $total_assign = $user->total_assign - 1;
        if ($user->total_assign <= 0) {
            $total_assign = 0;
        }

        User::where('id', $event->data->collaborator_id)->update([
            'total_assign' => $total_assign
        ]);

    }
}
