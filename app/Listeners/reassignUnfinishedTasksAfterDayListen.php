<?php

namespace App\Listeners;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\User;
use App\Models\Salon;
use App\Models\Demnad;
use App\Models\Support;
use App\Models\Reported;
use App\Models\WithDraw;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\WorkCollaboratorWhenOnline;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\reassignUnfinishedTasksAfterDayEvent;

class reassignUnfinishedTasksAfterDayListen
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
    public function handle(reassignUnfinishedTasksAfterDayEvent $event): void
    {
        $collaborator = User::find($event->collaboratorID);
        
        $this->taskCars($collaborator);
        $this->taskByCars($collaborator);
        $this->taskSalons($collaborator);
        $this->taskReported($collaborator);
        $this->taskSupport($collaborator);
        $this->taskWithDraw($collaborator);

        event(new WorkCollaboratorWhenOnline());
    }

    public function deleteOldTask($id = null)
    {
        $collaborator = User::find($id);
        if ($collaborator) {
            $total_assign = $collaborator->total_assign - 1;

            if($total_assign <= 0) {
                $total_assign = 0;
            }

            User::where('id', $id)->update([
                'total_assign' => $total_assign
            ]);
        }
    }

    public function taskCars($collaborator)
    {
        $cars = Car::where([
            'status' => 0,
            'collaborator_id' => $collaborator->id
        ])
        ->get();

        foreach ($cars as $item) {
            Car::where([
                'collaborator_id' => $collaborator->id,
                'status' => 0
                ])->update([
                'collaborator_id' => null
            ]);
            $this->deleteOldTask($collaborator->id);
        }
    }

    public function taskByCars($collaborator)
    {
        $byCars = Demnad::where([
            'status' => 0,
            'collaborator_id' => $collaborator->id
        ])
        ->get();
        foreach ($byCars as $item) {
            Demnad::where([
                'collaborator_id' => $collaborator->id,
                'status' => 0
                ])->update([
                'collaborator_id' => null
            ]);
            $this->deleteOldTask($collaborator->id);
        }
    }

    public function taskSalons($collaborator)
    {
        $salons = Salon::where([
            'status' => 0,
            'collaborator_id' => $collaborator->id
        ])
        ->get();
        foreach ($salons as $item) {
            Salon::where([
                'collaborator_id' => $collaborator->id,
                'status' => 0
                ])->update([
                'collaborator_id' => null
            ]);
            $this->deleteOldTask($collaborator->id);
        }
    }

    public function taskReported($collaborator)
    {
        $reports = Reported::where([
            'status' => 0,
            'collaborator_id' => $collaborator->id
        ])
        ->get();
        foreach ($reports as $item) {
            Reported::where([
                'collaborator_id' => $collaborator->id,
                'status' => 0
                ])->update([
                'collaborator_id' => null
            ]);
            $this->deleteOldTask($collaborator->id);
        }
    }

    public function taskWithDraw($collaborator)
    {
        $draws = WithDraw::where([
            'status' => 0,
            'collaborator_id' => $collaborator->id
        ])
        ->get();
        foreach ($draws as $item) {
            WithDraw::where([
                'collaborator_id' => $collaborator->id,
                'status' => 0
                ])->update([
                'collaborator_id' => null
            ]);
            $this->deleteOldTask($collaborator->id);
        }
    }

    public function taskSupport($collaborator)
    {
        $supports = Support::where([
            'status' => 0,
            'collaborator_id' => $collaborator->id
        ])
        ->get();
        foreach ($supports as $item) {
            Support::where([
                'collaborator_id' => $collaborator->id,
                'status' => 0
                ])
            ->update([
                'collaborator_id' => null
            ]);
            $this->deleteOldTask($collaborator->id);
        }
    }
}
