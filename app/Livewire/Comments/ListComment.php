<?php

namespace App\Livewire\Comments;

use App\Models\Car;
use App\Models\News;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\ReplyComments;
use Livewire\Attributes\Locked;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Comments as CommentsModel;

class ListComment extends Component
{
    use WithPagination;

    #[Locked]
    public $oop;
    public $reply;

    public function mount($oop = null)
    {
        $this->oop = $oop;
    }

    #[On('comment-created')]
    public function renderComment()
    {
        if ($this->oop instanceof News) {
            return CommentsModel::with([
                'user', 'reply' => function ($query) {
                    $query->orderBy('created_at', 'desc');
                }
            ])
                ->where('news_id', $this->oop->id)
                ->orderBy('created_at', 'desc')
                ->simplePaginate(4);
        } elseif ($this->oop instanceof Car) {
            return CommentsModel::with([
                'user', 'reply' => function ($query) {
                    $query->orderBy('created_at', 'desc');
                }
            ])
                ->where('car_id', $this->oop->id)
                ->orderBy('created_at', 'desc')
                ->simplePaginate(4);
        }
    }

    public function replyComment($item)
    {
        if (!Auth::check()) {
            $this->dispatch('showError', 'Vui lòng đăng nhập để bình luận');
            return redirect()->route('login');
        }
        $this->validate(['reply' => 'required|min:3']);
        if ($item['car_id'] != 0) {
            // dd($item);
            ReplyComments::create([
                'body' => htmlspecialchars($this->reply),
                'comment_id' => $item['id'],
                'user_id' => auth()->id(),
                'car_id' => $item['car_id'],
                'news_id' => 0
            ]);
            // dd('hihi');
            $this->reset('reply');
            $item = null;
            $this->dispatch('renderReplyComments');
        } elseif ($item['news_id'] != 0) {
            ReplyComments::create([
                'body' => htmlspecialchars($this->reply),
                'comment_id' => $item['id'],
                'user_id' => auth()->id(),
                'car_id' => 0,
                'news_id' => $item['news_id']
            ]);
            $this->reset('reply');
            $item = null;
            $this->dispatch('renderReplyComments');
        }
    }

    public function render()
    {
        return view('livewire.comments.list-comment', [
            'listComments' => $this->renderComment()
        ]);
    }
}
