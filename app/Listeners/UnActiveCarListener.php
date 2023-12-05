<?php

namespace App\Listeners;

use App\Events\CarCollaboratorEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UnActiveCarListener
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
    public function handle(CarCollaboratorEvent $event): void
    {
        //
    }
}
