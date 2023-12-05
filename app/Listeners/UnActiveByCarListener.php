<?php

namespace App\Listeners;

use App\Events\ByCarCollaboratorEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UnActiveByCarListener
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
    public function handle(ByCarCollaboratorEvent $event): void
    {
        //
    }
}
