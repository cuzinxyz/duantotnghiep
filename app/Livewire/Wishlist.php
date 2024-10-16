<?php

namespace App\Livewire;

use App\Models\Wishlist as ModelsWishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Wishlist extends Component
{
    public function remove($id)
    {
        $remove = ModelsWishlist::where('user_id', Auth::id())->where('id', $id)->delete();
        if ($remove) {
            // $this->loadCars();
            $this->dispatch('showSuccess', 'Xóa tin đã lưu thành công');
        }
    }

    #[Computed]
    public function render()
    {
        $cars = ModelsWishlist::where('user_id', Auth::id())->latest()->get();

        return view('livewire.wishlist', [
            'cars' => $cars,
        ]);
    }
}
