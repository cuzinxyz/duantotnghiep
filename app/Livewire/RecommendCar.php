<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;

class RecommendCar extends Component
{
    public $amount = 6;
    
    public function load()
    {
        $this->amount = $this->amount + 6;
    }
    
    public function render()
    {
        $carIds = DB::table('purchased_service')
            ->where('expired_date', '>=', Carbon::now())
            ->whereNotNull('car_id')
            ->select('car_id')
            ->get()
            ->pluck('car_id')
            ->flatMap(function ($carId) {
                return explode(',', $carId);
            })
            ->filter()
            ->unique()
            ->values()
            ->toArray();
            // var_dump($carIds);
        $recommendCars = Car::whereIn('id', $carIds)
            ->take($this->amount)
            ->where('status', 1)
            ->get();
        // dd($recommendCars);
        
        $recommendCars = $recommendCars->map(function ($car) {
            $car['is_vip'] = true;
        
            return $car;
        });

        $id = $recommendCars->pluck('id');
        session(['featured_cars_id' => $id]);
        
        return view('livewire.recommend-car', [
            'recommendCars' => $recommendCars
        ]);
    }
}
