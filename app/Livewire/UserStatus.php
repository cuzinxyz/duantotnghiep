<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserStatus extends Component
{
    public $user;

    public function getListeners()
    {
        return [
            'echo-presence:user-status,joining' => 'joining',
            'echo-presence:user-status,leaving' => 'leaving',
        ];
    }

    public function joining($data) {
        User::where('id', $data['id'])->update([
            'active' => 1,
        ]);

        dd(123);
    }

    

    public function leaving($data)
    {
        User::where('id', $data['id'])->update([
            'active' => 0,
        ]);

        dd(456);
    }

    public function render()
    {    
        return view('livewire.user-status');
    }
}
