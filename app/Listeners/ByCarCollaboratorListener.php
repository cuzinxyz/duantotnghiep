<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\ByCarCollaboratorEvent;
use App\Models\Demnad;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ByCarCollaboratorListener
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
        $collaborator = User::where([
            'is_collaborator' => 1,
            'active' => 1
        ])
            ->orderBy('total_assign', 'asc')
            ->first();

        Demnad::where('id', $event->data->id)->update([
            'collaborator_id' => $collaborator->id,
        ]);

        $total_assign = $collaborator->total_assign + 1;

        User::where('id', $collaborator->id)->update([
            'total_assign' => $total_assign
        ]);

    }
}
