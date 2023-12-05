<?php

namespace App\Listeners;

use App\Models\Car;
use App\Models\User;
use App\Events\CarCollaboratorEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CarCollaboratorListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     */
    public function handle(CarCollaboratorEvent $event): void
    {

        $collaborator = User::where([
            'is_collaborator' => 1,
        ])
        ->orderBy('total_assign', 'asc')
        ->first();

        Car::where('id', $event->data->id)->update([
            'collaborator_id' => $collaborator->id,
        ]);

        $total_assign = $collaborator->total_assign + 1;
        
        User::where('id', $collaborator->id)->update([
            'total_assign' => $total_assign
        ]);

    }
}
