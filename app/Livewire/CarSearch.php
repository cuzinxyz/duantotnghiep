<?php

namespace App\Livewire;

use Livewire\Component;

class CarSearch extends Component
{
    public $carSearch;
    // public function mount()
    // {
    //     $this->slug = last(explode('/', $url_page));
    // }
    public function render()
    {
        return view('livewire.car-search');
    }
    public function search()
    {
        // dd($this->carSearch);
        return redirect()->route('carSearch', $this->carSearch);
    }
}
