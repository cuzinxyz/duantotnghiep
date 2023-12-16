<?php

namespace App\Livewire\Comments;

use App\Models\Car;
use App\Models\News;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\ReplyComments;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Comments as CommentsModel;

class Comment extends Component
{
    use WithPagination;

    #[Locked]
    public $carID;

    #[Rule('required|min:3|max:200')]
    public $comment;

    #[Rule('required|min:3|max:200')]
    public $reply;

    public function mount($carID = null)
    {
        $this->carID = $carID;
    }

    /*public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
            <svg>...</svg>
        </div>
        HTML;
    }*/

    public function saveComment()
    {
        if (!Auth::check()) {
            $this->dispatch('showError', 'Vui lòng đăng nhập để bình luận');
            return redirect()->route('login');
        }

        $this->validateOnly('comment');

        CommentsModel::create([
            'body' => $this->comment,
            'user_id' => auth()->id(),
            'car_id' => $this->carID,
            'news_id' => 0
        ]);

        $this->reset('comment');
        $this->dispatch('commentCarSucceeded');
    }

    public function replyComment($commentID)
    {
        if (!Auth::check()) {
            $this->dispatch('showError', 'Vui lòng đăng nhập để bình luận');
            return redirect()->route('login');
        }
        
        $this->validateOnly('reply');

        ReplyComments::create([
            'body' => htmlspecialchars($this->reply),
            'comment_id' => $commentID,
            'user_id' => Auth::user()->id,
            'car_id' => $this->carID,
            'news_id' => 0
        ]);


        $this->reset('reply');
        $this->dispatch('renderReCommentCar');
    }

    public function deleteComment($commentID) {
        $result = CommentsModel::where('id', $commentID)->delete();   
        if($result) {
            $this->dispatch('showSuccess', 'Xóa bình luận thành công');   
        }
    }

    public function deleteReplyComment($commentID)
    {
        $result = ReplyComments::where('id', $commentID)->delete();
        if ($result) {
            $this->dispatch('showSuccess', 'Xóa bình luận thành công');
        }
    }

    #[On('commentCarSucceeded')]
    #[On('renderReCommentCar')]
    public function render()
    {
        return view('livewire.comments.comment', [
            'listComments' => CommentsModel::with('reply')->where('car_id', $this->carID)->orderBy('created_at', 'desc')->simplePaginate(6)
        ]);
    }
}
