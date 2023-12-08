<?php

namespace App\Listeners;

use App\Models\Car;
use App\Models\User;
use App\Events\WorkCollaboratorEvent;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\WorkCollaboratorWhenOnline;
use App\Models\Demnad;
use App\Models\Reported;
use App\Models\Salon;
use App\Models\WithDraw;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkCollaboratorWhenOnlineListener implements ShouldQueue
{
    public $tries = 3;

    public $delay = 10;

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
    public function handle(WorkCollaboratorWhenOnline $event): void
    {
        $is_collaborator = User::where([
            'active' => 1,
            'is_collaborator' => 1,
        ])->get();

        if ($is_collaborator) {
            $this->checkUnActiveCar();
            $this->checkUnActiveByCar();
            $this->checkUnActiveReport();
            $this->checkUnActiveSalon();
            $this->checkUnActiveWithDraw();
        }

    }


    public function taskAllocation($data) {
        if (!empty($data) && $data->count() > 0) {
            foreach ($data as $item) {
                event(new WorkCollaboratorEvent($item));
            }
        }
    }

    public function checkUnActiveCar() {
        $cars = Car::where([
            'status' => 0,
            'collaborator_id' => null
        ])->get();

        if($cars->count() > 0) {
            $this->taskAllocation($cars);
        }
    }

    public function checkUnActiveSalon()
    {
        $salons = Salon::where([
            'status' => 0,
            'collaborator_id' => null
        ])->get();

        if ($salons->count() > 0) {
            $this->taskAllocation($salons);
        }
    }

    public function checkUnActiveByCar()
    {
        $demnads = Demnad::where([
            'status' => 0,
            'collaborator_id' => null
        ])->get();

        if ($demnads->count() > 0) {
            $this->taskAllocation($demnads);
        }
    }

    public function checkUnActiveReport()
    {
        $reports = Reported::where([
            'status' => 0,
            'collaborator_id' => null
        ])->get();

        if ($reports->count() > 0) {
            $this->taskAllocation($reports);
        }
    }

    public function checkUnActiveWithDraw()
    {
        $withDraws = WithDraw::where([
            'status' => 0,
            'collaborator_id' => null
        ])->get();

        if ($withDraws->count() > 0) {
            $this->taskAllocation($withDraws);
        }
    }
}
