<?php

namespace App\Listeners;

use Carbon\Carbon;
use App\Models\User;
use App\Models\ChMessage;
use App\Models\PurchasedService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\NotificationExtendServices;
use App\Mail\SendMailExtendService;
use App\Models\Salon;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationExtendServicesListen
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
    public function handle(NotificationExtendServices $event): void
    {
        $this->handleExtendService();
        $this->handleExtendSalon();
    }

    public function handleExtendService()
    {
        $purchased_service = PurchasedService::all();
        $now = Carbon::now();

        $bot = User::where('name', 'LIKE', 'BOT')->first();
        foreach ($purchased_service as $item) {
            if (Carbon::parse($item->expired_date)->subDays(2)) {
                $message = 'Xin chào bạn, Chúng tôi thông báo rằng tin đăng xe của bạn có tiêu đề: ' . $item->car->title . ' , sẽ hết hạn vào ngày ' . Carbon::parse($item->expired_date)->format('d-m-Y') . ' .Vì vậy bạn vui lòng ra hạn thêm để có thể tiếp tục duy trì tin đăng xe của bạn. Cảm ơn bạn đã sử dụng dịch vụ của DRIVCO.';
                ChMessage::create([
                    'from_id' => $bot->id,
                    'to_id' => $item->user_id,
                    'body' => $message
                ]);
                $user = User::find($item->user_id);
                $subject = 'Thông báo gia hạn gói tin';
                Mail::to($user->email)->later(now()->addSeconds(5), new SendMailExtendService($subject, $message));

            }
        }
    }

    public function handleExtendSalon()
    {
        $salons = Salon::where('status', 1)->where('expired_date', '!=', null)->get();
        $now = Carbon::now();

        $bot = User::where('name', 'LIKE', 'BOT')->first();
        foreach ($salons as $item) {
            if (Carbon::now()->between(
                Carbon::parse($item->expired_date)->subDays(2),
                Carbon::parse($item->expired_date)
            )) {

                $message = 'Xin chào bạn, Chúng tôi thông báo rằng salon của bạn sẽ hết hạn vào ngày ' . Carbon::parse($item->expired_date)->format('d-m-Y') . '.Vì vậy bạn vui lòng ra hạn thêm để có thể tiếp tục duy trì salon của bạn. Cảm ơn bạn đã sử dụng dịch vụ của DRIVCO.';
                ChMessage::create([
                    'from_id' => $bot->id,
                    'to_id' => $item->user_id,
                    'body' => $message
                ]);

                $subject = 'Thông báo gia hạn gói tin';
                Mail::to($item->email)->later(now()->addSeconds(5), new SendMailExtendService($subject, $message));
            }
        }
    }
}
