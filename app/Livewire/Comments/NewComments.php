<?php

namespace App\Livewire\Comments;

use Livewire\Component;
use App\Models\Comments;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\ReplyComments;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Locked;
use Illuminate\Support\Facades\Auth;

class NewComments extends Component
{
    use WithPagination;

    #[Locked]
    public $newID;

    #[Rule('required|min:3|max:200')]
    public $comment;

    #[Rule('required|min:3|max:200')]
    public $reply;

    public function mount($newID = null)
    {
        $this->newID = $newID;
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
            <svg>...</svg>
        </div>
        HTML;
    }

    public function saveComment()
    {
        if (!Auth::check()) {
            $this->dispatch('showError', 'Vui lòng đăng nhập để bình luận');
            return redirect()->route('login');
        }

        $this->validateOnly('comment');

        Comments::create([
            'body' => $this->comment,
            'user_id' => auth()->id(),
            'car_id' => 0,
            'news_id' => $this->newID
        ]);

        $this->reset('comment');
        $this->dispatch('commentNewSucceeded');
    }

    public function replyComment($newID)
    {
        $this->validateOnly('reply');

        ReplyComments::create([
            'body' => htmlspecialchars($this->reply),
            'comment_id' => $newID,
            'user_id' => Auth::user()->id,
            'car_id' => 0,
            'news_id' => $this->newID
        ]);


        $this->reset('reply');
        $this->dispatch('renderReCommentNew');
    }

    public function deleteComment($newID)
    {
        $result = Comments::where('id', $newID)->delete();
        if ($result) {
            $this->dispatch('showSuccess', 'Xóa bình luận thành công');
        }
    }

    public function deleteReplyComment($newID)
    {
        $result = ReplyComments::where('id', $newID)->delete();
        if ($result) {
            $this->dispatch('showSuccess', 'Xóa bình luận thành công');
        }
    }

    #[On('commentNewSucceeded')]
    #[On('renderReCommentNew')]
    public function render()
    {
        return view('livewire.comments.new-comment', [
            'listComments' => Comments::with('reply')->where('news_id', $this->newID)->orderBy('created_at', 'desc')->simplePaginate(6)
        ]);
    }
}
