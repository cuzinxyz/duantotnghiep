<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;

class BrandList extends Component
{
    public function render()
    {
        $brands = Brand::all();
        return view('livewire.brand-list', [
            'brands' => $brands
        ]);
    }
}
