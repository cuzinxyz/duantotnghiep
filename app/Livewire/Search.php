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
            $cars = Car::where('title', 'like', '%' . $this->search . '%')
                    ->where('status', 1)
                    ->get();
        }
        return view('livewire.search', compact('cars'));
    }
}
