<?php

namespace App\Livewire;

use App\Models\Ads;
use App\Models\Demnad;
use Livewire\Component;
use App\Models\Comments;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use App\Events\WorkCollaboratorEvent;

class PostBuyCar extends Component
{
  #[Rule('required', message: 'Vui lòng cung cấp nội dung bài viết')]
  #[Rule('min:10', message: 'Nội dung này quá ngắn')]
  public $content;
  
  public $search = '';

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
      if ($demand->user_id == auth()->id() || auth()->user()->is_collaborator == 1) {
        $demand->delete();

        $this->dispatch('showSuccess', 'Xoá tin thành công');
      } else {
        $this->dispatch('showError', 'Bạn không có quyền thực hiện');
      }
    }
  }

  public function render()
  {
    if (empty($this->search)) {
      $demands = Demnad::where('status', 1)
        ->orderBy('created_at', 'desc')
        ->paginate(10);
    } else {
      $demands = Demnad::where('status', 1)
        ->where('content', 'like', '%' . $this->search . '%')
        ->orderBy('created_at', 'desc')
        ->paginate(10);
    }

    $pending = '';
    if (auth()->check()) {
      $pending = Demnad::where('status', 0)->where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
    }

    $ads = Ads::where('priority', 2)
      ->inRandomOrder()
      ->limit(1)
      ->get();

    return view('livewire.post-buy-car', [
      'demands' => $demands,
      'pending' => $pending,
      'ads' => $ads
    ]);
  }
}
