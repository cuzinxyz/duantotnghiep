<?php

namespace App\Listeners;

use App\Events\NotificationExpiresSalon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotificationExpiresSalon implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    public function handle(NotificationExpiresSalon $event): void
    {
        
    }
}
