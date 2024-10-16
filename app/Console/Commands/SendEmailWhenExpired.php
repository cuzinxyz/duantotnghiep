<?php

namespace App\Console\Commands;

use App\Events\NotificationExtendServices;
use Illuminate\Console\Command;

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
        event(new NotificationExtendServices);
    }
}
