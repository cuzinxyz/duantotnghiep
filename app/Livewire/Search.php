<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public function render()
    {
        $cars = [];
        if (strlen($this->search) >= 2) {
            $cars = Car::where('status', 1)
                ->where('title', 'like', '%' . $this->search . '%')
                // ->orWhereHas('brand', function($subquery) {
                //     $subquery->where('brand_name', 'like', '%' . $this->search . '%');
                // })
                ->get();
            // dd($cars);
        }
        return view('livewire.search', compact('cars'));
    }
}
