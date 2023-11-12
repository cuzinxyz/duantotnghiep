<?php

namespace App\Livewire;

use App\Models\Wishlist as ModelsWishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Wishlist extends Component
{
    public $cars;

    public function mount()
    {
        $this->loadCars();
    }

    public function loadCars()
    {
        $this->cars = ModelsWishlist::with('car')->where('user_id', Auth::id())->latest()->get();
    }

    public function remove($id)
    {
        $remove = ModelsWishlist::where('user_id', Auth::id())->where('id', $id)->delete();
        if ($remove) {
            $this->loadCars();
            $this->dispatch('showSuccess', 'Xóa tin đã lưu thành công');
        }
    }

    public function render()
    {
        return view('livewire.wishlist');
    }
}
