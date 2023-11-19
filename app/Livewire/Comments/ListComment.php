<?php

namespace App\Livewire\Comments;

use App\Models\Car;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Locked;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Comments as CommentsModel;
use App\Models\ReplyComments;

class ListComment extends Component
{

    public $comment;

    public $slug;

    public $page;

    public $reply;

    public function mount($id = null)
    {

        $url_page = request()->url();

        $this->slug = last(explode('/', $url_page));

        $this->page = Route::currentRouteName();
    }

    public function replyComment($id=null) {
        if (!Auth::check()) {
            $this->dispatch('showError', 'Vui lòng đăng nhập để bình luận');
            return redirect()->route('login');
        }


        $user_id = Auth::user()->id;
        $comment_id = $id;

        if ($this->page == 'car-detail') {
            $carComment = Car::where('slug', $this->slug)->first();

            ReplyComments::create([
                'body' => htmlspecialchars($this->reply),
                'comment_id' => $comment_id,
                'user_id' => $user_id,
                'car_id' => $carComment->id,
                'news_id' => 0
            ]);

            $this->reset('reply');

            $this->dispatch('renderReplyComments');
        }
    }

    public function getCommentsCar()
    {
        $carComment = Car::where('slug', $this->slug)->first();
        
        return CommentsModel::with([
            'user', 'reply' => function ($query) {
                $query->orderBy('created_at', 'desc');
            }])
        ->where('car_id', $carComment->id)
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();
    }

    #[On('renderComments')]
    public function render()
    {
        if ($this->page == 'car-detail') {
            $listComments = $this->getCommentsCar();
        }
        
        return view('livewire.comments.list-comment', [
            'listComments' => $listComments
        ]);
    }
}
