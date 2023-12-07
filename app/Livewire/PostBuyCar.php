<?php

namespace App\Livewire;

use App\Events\WorkCollaboratorEvent;
use App\Models\Comments;
use App\Models\Demnad;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Rule;

class PostBuyCar extends Component
{
  #[Rule('required', message: 'Vui lòng cung cấp nội dung bài viết')]
  #[Rule('min:10', message: 'Nội dung này quá ngắn')]
  public $content;

  public function save()
  {
    if (!auth()->check()) {
      $this->dispatch('showError', 'Bạn cần đăng nhập để thực hiện chức năng này');
    }

    $validated = $this->validate();

    if ($validated) {
      $validated['user_id'] = auth()->id();
      $validated['content'] = htmlspecialchars($validated['content']);
      $validated['status'] = 0;

      $result = Demnad::create($validated);

      if ($result) {
        event(new WorkCollaboratorEvent($result));
      }

      $this->dispatch('showSuccess', 'Đăng tin thành công! Vui lòng chờ duyệt!');

      $this->reset();
    }
  }

  public function remove($id)
  {
    if (auth()->check()) {
      $demand = Demnad::find($id);
      if ($demand->user_id == auth()->id()) {
        $demand->delete();

        $this->dispatch('showSuccess', 'Xoá tin thành công');
      } else {
        $this->dispatch('showError', 'Bạn không có quyền thực hiện');
      }
    }
  }

  public function render()
  {
    $demands = Demnad::where('status', 1)->orderBy('created_at', 'desc')->paginate(10);

    $pending = '';
    if (auth()->check()) {
      $pending = Demnad::where('status', 0)->where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
    }

    return view('livewire.post-buy-car', [
      'demands' => $demands,
      'pending' => $pending
    ]);
  }
}
