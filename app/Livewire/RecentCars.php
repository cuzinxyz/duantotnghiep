<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class RecentCars extends Component
{
    public $brandID;

    public function filterCar($brandID)
    {
        $this->brandID = $brandID;
    }

    public function render()
    {
        // get featured car
        $featured_cars_id = session()->get('featured_cars_id');
        // Recent Cars
        $topBrands = DB::table('cars')
            ->join('brands', 'cars.brand_id', '=', 'brands.id')
            ->select('brands.id', 'brands.brand_name', DB::raw('COUNT(cars.id) as car_count'))
            ->whereNull('salon_id')
            ->groupBy('brands.id', 'brands.brand_name')
            ->orderByDesc('car_count')
            ->limit(5)
            ->distinct()
            ->get();
        $recentCars = Car::inRandomOrder()
            ->where('status', 1)
            ->whereNotIn('id', $featured_cars_id)
            ->whereNull('salon_id')
            ->limit(8)
            ->get();

        if (!empty($this->brandID)) {
            if ($this->brandID == 'random') {
                $recentCars = Car::inRandomOrder()
                    ->where('status', 1)
                    ->whereNull('salon_id')
                    ->limit(8)
                    ->get();
            } else {
                $recentCars = Car::inRandomOrder()
                    ->where('brand_id', $this->brandID)
                    ->where('status', 1)
                    ->whereNull('salon_id')
                    ->limit(8)
                    ->get();
            }
        }
        return view('livewire.recent-cars', [
            'topBrands' => $topBrands,
            'recentCars' => $recentCars,
        ]);
    }
}
