<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Salon;
use App\Models\ChMessage;
use Illuminate\Console\Command;
use App\Models\PurchasedService;
use App\Mail\SendMailExtendService;
use Illuminate\Support\Facades\Mail;

class SendEmailWhenExpired extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email-when-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
           
    }

    public function handleExtendService()
    {
        $purchased_service = PurchasedService::all();
        $now = Carbon::now();

        $bot = User::where('name', 'LIKE', 'BOT')->first();
        foreach ($purchased_service as $item) {
            if (Carbon::parse($item->expired_date)->subDays(2)) {
                $message = 'Xin chào bạn, 
                            Chúng tôi thông báo rằng tin đăng xe của bạn có tiêu đề: ' . $item->car->title . ' , sẽ hết hạn vào ngày ' . Carbon::parse($item->expired_date)->format('d-m-Y') . '
                            .Vì vậy bạn vui lòng ra hạn thêm để có thể tiếp tục duy trì tin đăng xe của bạn.
                            Cảm ơn bạn đã sử dụng dịch vụ của DRIVCO.';
                ChMessage::create([
                    'from_id' => $bot->id,
                    'to_id' => $item->user_id,
                    'body' => $message
                ]);
            }
        }
    }

    public function handleExtendSalon()
    {
        $salons = Salon::all();
        $now = Carbon::now();

        $bot = User::where('name', 'LIKE', 'BOT')->first();
        foreach ($salons as $item) {
            if (Carbon::now()->between(
                Carbon::parse($item->expired_date)->subDays(2),
                Carbon::parse($item->expired_date)
            )) {
                $message = 'Xin chào bạn, 
                            Chúng tôi thông báo rằng tin đăng xe của bạn có tiêu đề: ' . $item->car->title . ' , sẽ hết hạn vào ngày ' . Carbon::parse($item->expired_date)->format('d-m-Y') . '
                            .Vì vậy bạn vui lòng ra hạn thêm để có thể tiếp tục duy trì tin đăng xe của bạn.
                            Cảm ơn bạn đã sử dụng dịch vụ của DRIVCO.';
                ChMessage::create([
                    'from_id' => $bot->id,
                    'to_id' => $item->user_id,
                    'body' => $message
                ]);
            }
        }
    }
}
