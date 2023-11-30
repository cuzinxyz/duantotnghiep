<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Request;

class Showroom extends Component
{
    #[Layout('components.partials.layout-client')]
    public $carSearch;
    public $slug = '';
    // public $search = '';
    public function mount()
    {
        $url_page = request()->url();
        $this->slug = last(explode('/', $url_page));
    }
    public function render()
    {
        // dd($this->slug);
        $cars = Car::where('title', 'LIKE', '%' . $this->slug . '%')->get();
        // $cars = Car::search($this->slug)->get();
        dd($cars);
        return view('livewire.showroom', []);
    }
}
