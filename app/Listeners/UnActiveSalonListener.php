<?php

namespace App\Listeners;

use App\Events\SalonCollaboratorEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UnActiveSalonListener
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
        
    }
}
