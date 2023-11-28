<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Showroom extends Component
{
    #[Layout('components.partials.layout-client')]
    public function render()
    {
        return view('livewire.showroom');
    }
}
