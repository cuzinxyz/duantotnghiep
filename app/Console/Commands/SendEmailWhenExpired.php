<?php

namespace App\Console\Commands;

use App\Events\NotificationExtendServices;
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
    protected $signature = 'generate:send-email-when-expired';

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
        event(new NotificationExtendServices());      
    }
   
}
