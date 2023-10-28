<?php

namespace App\Livewire;

use App\Models\Demnad;
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

  public function save()
  {
    $this->validate();
    $this->user_id = Auth::id();
    $this->status = 0;
    $this->reason = '';
    Demnad::create(
      $this->only(['user_id', 'status', 'title', 'content', 'reason'])
    );
  }

  public function render()
  {
    return view('livewire.post-buy-car');
  }
}
