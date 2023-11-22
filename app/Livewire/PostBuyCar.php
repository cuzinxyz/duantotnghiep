<?php

namespace App\Livewire;

use App\Models\Demnad;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Rule;

class PostBuyCar extends Component
{
  public $user_id;

  public $status;

  public $reason;

  #[Rule('required', message: 'Vui lòng cung cấp tiêu đề bài viết')]
  #[Rule('min:10', message: 'Tiêu đề này quá ngắn')]
  public $title = '';

  #[Rule('required', message: 'Vui lòng cung cấp nội dung bài viết')]
  #[Rule('min:30', message: 'Nội dung này quá ngắn')]
  public $content = '';
  #[Rule('required', message: 'Vui lòng nhập số điện thoại')]
  public $phoneNumber;

  public function save()
  {
    $validatedData = $this->validate([
      'phoneNumber' => 'required|min:6',
      'content' => 'required|min:30',
    ]);

    $this->user_id = Auth::id();
    if (!Auth::user()->phone_number) {
      $user = User::find(auth()->id())
        ->update([
          "phone_number" => $this->phoneNumber
        ]);
    }
    $this->status = 0;
    $this->reason = '';
    $result = Demnad::create($validatedData);
    dd($result);
  }

  public function render()
  {
    $this->phoneNumber = auth()->user()->phone_number ? auth()->user()->phone_number : '';

    return view('livewire.post-buy-car');
  }
}
