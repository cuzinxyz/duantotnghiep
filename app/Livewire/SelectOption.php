<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\ModelCar;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SelectOption extends Component
{
    #[Modelable]
    public $value;
    public $label;

    #[Reactive]
    public $options;
    public $nameID;
    public $columnName;

    public function mount($nameID=null, $options=null, $columnName=null, $label=null) {
        $this->options = $options;
        $this->columnName = $columnName;
        $this->label = $label;
        $this->nameID = $nameID;
    }

    public function render()
    {
        return view('livewire.select-option');
    }
}
