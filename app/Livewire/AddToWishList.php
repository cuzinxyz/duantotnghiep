<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class AddToWishList extends Component
{
    public $carID;

    public function addToWishlist($car_id)
    {
        if (Auth::check()) {
            $exists = Wishlist::where('user_id', Auth::id())->where('car_id', $car_id)->first();
            if (!$exists) {
                Wishlist::insert([
                    'user_id' => Auth::id(),
                    'car_id' => $car_id,
                    'created_at' => Carbon::now(),
                ]);
                $this->dispatch('showSuccess', 'Lưu tin thành công');
            } else {
                $this->dispatch('showInfo', 'Tin này đã có trong danh sách');
            }
        } else {
            $this->dispatch('showError', 'Bạn cần đăng nhập để thực hiện chức năng này');
        }
    }

    
    public function render()
    {
        return view('livewire.add-to-wish-list');
    }
}
