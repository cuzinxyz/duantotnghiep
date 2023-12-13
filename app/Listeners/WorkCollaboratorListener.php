<?php

namespace App\Listeners;

use App\Models\Car;
use App\Models\User;
use App\Models\WithDraw;
use App\Events\WorkCollaboratorEvent;
use App\Models\Demnad;
use App\Models\Reported;
use App\Models\Salon;
use App\Models\Support;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkCollaboratorListener
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
    public function handle(WorkCollaboratorEvent $event): void
    {
        $collaborator = User::where([
            'is_collaborator' => 1,
            'active' => 1
        ])
            ->orderBy('total_assign', 'asc')
            ->first();

        if($collaborator) {
            $total_assign = $collaborator->total_assign + 1;

            User::where('id', $collaborator->id)->update([
                'total_assign' => $total_assign
            ]);

        } else {
            $collaborator = null;
        }
        

        if ($event->data instanceof Car) {
            $this->taskAllocation(Car::class, $event->data, $collaborator);
        }

        if ($event->data instanceof Salon) {
            $this->taskAllocation(Salon::class, $event->data, $collaborator);
        }

        if ($event->data instanceof Demnad) {
            $this->taskAllocation(Demnad::class, $event->data, $collaborator);
        }

        if ($event->data instanceof Reported) {
            $this->taskAllocation(Reported::class, $event->data, $collaborator);
        }

        if($event->data instanceof WithDraw) {
            $this->taskAllocation(WithDraw::class, $event->data, $collaborator);
        }

        if ($event->data instanceof Support) {
            $this->taskAllocation(Support::class, $event->data, $collaborator);
        }

    }

    public function taskAllocation($model, $data, $collaborator) {
        if($collaborator) {
            $model::where('id', $data->id)->update([
                'collaborator_id' => $collaborator->id,
            ]);
        }
    }


}
