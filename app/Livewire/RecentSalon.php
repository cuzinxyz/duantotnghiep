<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class RecentSalon extends Component
{
    public $salonID;

    public function filterSalon($salonID)
    {
        $this->salonID = $salonID;
    }

    public function render()
    {
        // Recent Cars
        $topSalons = DB::table('cars')
            ->join('salons', 'cars.salon_id', '=', 'salons.id')
            ->select('salons.id', 'salons.salon_name', DB::raw('COUNT(cars.id) as car_count'))
            ->whereNotNull('salon_id')
            ->groupBy('salons.id', 'salons.salon_name')
            ->orderByDesc('car_count')
            ->limit(5)
            ->distinct()
            ->get();
            // dd($topSalons);
        $recentCarsSalon = Car::inRandomOrder()
            ->where('status', 1)
            ->whereNotNull('salon_id')
            ->limit(8)
            ->get();

        if (!empty($this->salonID)) {
            if ($this->salonID == 'random') {
                $recentCarsSalon = Car::inRandomOrder()
                    ->where('status', 1)
                    ->whereNotNull('salon_id')
                    ->limit(8)
                    ->get();
            } else {
                $recentCarsSalon = Car::inRandomOrder()
                    ->where('salon_id', $this->salonID)
                    ->where('status', 1)
                    ->whereNotNull('salon_id')
                    ->limit(8)
                    ->get();
            }
        }
        return view('livewire.recent-salon', [
            'topSalons' => $topSalons,
            'recentCarsSalon' => $recentCarsSalon,
        ]);
    }
}
