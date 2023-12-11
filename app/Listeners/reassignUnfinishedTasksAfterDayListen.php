<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\reassignUnfinishedTasksAfterDayEvent;
use App\Models\Car;
use App\Models\Demnad;
use App\Models\Reported;
use App\Models\Salon;
use App\Models\Support;
use App\Models\WithDraw;
use Carbon\Carbon;

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
        $this->taskCars();  
        $this->taskByCars();
        $this->taskSalons();
        $this->taskReported();
        $this->taskSupport();
        $this->taskWithDraw(); 
    }

    public function collaborator($collaborator_id = null)
    {
        $collaborator = null;

        $collaborator_online = User::where([
            'is_collaborator' => 1,
            'active' => 1
        ])->where('id', '!=', $collaborator_id)
            ->select(['id', 'total_assign'])
            ->orderBy('total_assign', 'desc')
            ->first();

        if($collaborator_online) {
            $collaborator = $collaborator_online;
        } else {
            $collaborator = User::where('is_collaborator', 1)
            ->where('id', '!=', $collaborator_id)
            ->select(['id', 'total_assign'])
            ->orderBy('total_assign', 'desc')
            ->first();
        }

        return $collaborator;
    }

    public function deleteOldTask($id = null)
    {
        $collaborator = User::find($id);
        if ($collaborator) {
            $total_assign = $collaborator->total_assign - 1;

            User::where('id', $id)->update([
                'total_assign' => $total_assign
            ]);
        }
    }

    public function taskAllocation($model, $data, $collaborator)
    {
        if ($collaborator) {
            $ctv = User::where('id', $collaborator->id)->first();
            $total_assign = $ctv->total_assign + 1;
            User::where('id', $collaborator->id)->update([
                'total_assign' => $total_assign
            ]);

            $model::where('id', $data->id)->update([
                'collaborator_id' => $collaborator->id,
            ]);
        }
    }

    public function taskCars()
    {
        $cars = Car::where([
            'status' => 0
        ])
        ->select('id', 'collaborator_id','created_at')
        ->get();

        $now = Carbon::now();
        foreach ($cars as $item) {
            if ($item->created_at->diffInHours($now) > 8) {
                $collaborator = $this->collaborator($item->collaborator_id);
                $this->taskAllocation(Car::class, $item, $collaborator);
                $this->deleteOldTask($item->collaborator_id);
            }
        }
    }

    public function taskByCars()
    {
        $byCars = Demnad::where([
            'status' => 0
        ])
            ->select('id', 'collaborator_id', 'created_at')
            ->get();

        $now = Carbon::now();
        foreach ($byCars as $item) {
            if ($item->created_at->diffInHours($now) > 8) {
                $collaborator = $this->collaborator($item->collaborator_id);
                $this->taskAllocation(Demnad::class, $item, $collaborator);
                $this->deleteOldTask($item->collaborator_id);
            }
        }
    }

    public function taskSalons()
    {
        $byCars = Salon::where([
            'status' => 0
        ])
            ->select('id', 'collaborator_id', 'created_at')
            ->get();

        $now = Carbon::now();
        foreach ($byCars as $item) {
            if ($item->created_at->diffInHours($now) > 8) {
                $collaborator = $this->collaborator($item->collaborator_id);
                $this->taskAllocation(Salon::class, $item, $collaborator);
                $this->deleteOldTask($item->collaborator_id);
            }
        }
    }

    public function taskReported()
    {
        $reportes = Reported::where([
            'status' => 0
        ])
            ->select('id', 'collaborator_id', 'created_at')
            ->get();

        $now = Carbon::now();
        foreach ($reportes as $item) {
            if ($item->created_at->diffInHours($now) > 8) {
                $collaborator = $this->collaborator($item->collaborator_id);
                $this->taskAllocation(Reported::class, $item, $collaborator);
                $this->deleteOldTask($item->collaborator_id);
            }
        }
    }

    public function taskWithDraw()
    {
        $draws = WithDraw::where([
            'status' => 0
        ])
            ->select('id', 'collaborator_id', 'created_at')
            ->get();

        $now = Carbon::now();
        foreach ($draws as $item) {
            if ($item->created_at->diffInHours($now) > 8) {
                $collaborator = $this->collaborator($item->collaborator_id);
                $this->taskAllocation(WithDraw::class, $item, $collaborator);
                $this->deleteOldTask($item->collaborator_id);
            }
        }
    }

    public function taskSupport()
    {
        $support = Support::where([
            'status' => 0
        ])
            ->select('id', 'collaborator_id', 'created_at')
            ->get();

        $now = Carbon::now();
        foreach ($support as $item) {
            if ($item->created_at->diffInHours($now) > 8) {
                $collaborator = $this->collaborator($item->collaborator_id);
                $this->taskAllocation(Support::class, $item, $collaborator);
                $this->deleteOldTask($item->collaborator_id);
            }
        }
    }
}
