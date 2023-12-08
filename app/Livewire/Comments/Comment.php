<?php

namespace App\Livewire\Comments;

use App\Models\Car;
use App\Models\Comments as CommentsModel;
use App\Models\News;
use Livewire\Attributes\Locked;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comment extends Component
{
    #[Locked]
    public $id;
    #[Locked]
    public $oop;

    public $comment;

    public function mount($oop)
    {
        $this->oop = $oop;
    }

    public function saveComment()
    {
        // dd(123123);
        if ($this->oop instanceof News) {
            if (!Auth::check()) {
                $this->dispatch('showError', 'Vui lòng đăng nhập để bình luận');
                return redirect()->route('login');
            }
            $this->validate([
                'comment' => 'required|min:3'
            ]);
            CommentsModel::create([
                'body' => htmlspecialchars($this->comment),
                'user_id' => auth()->id(),
                'car_id' => 0,
                'news_id' => $this->oop->id
            ]);
            $this->oop = null;
            $this->dispatch('comment-created');
            $this->comment = '';

            if (empty($this->comment)) {
                dd('empty!');
            }
        } elseif($this->oop instanceof Car) {
            CommentsModel::create([
                'body' => htmlspecialchars($this->comment),
                'user_id' => auth()->id(),
                'car_id' => $this->oop->id,
                'news_id' => 0
            ]);
            $this->oop = null;
            $this->dispatch('comment-created');
            $this->comment = '';

            if (empty($this->comment)) {
                dd('empty!');
            }
        }
    }

    public function render()
    {
        return view('livewire.comments.comment');
    }
}
