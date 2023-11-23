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

    public $comment;

    public $slug;

    public $page;


    public function mount($id = null)
    {
        $this->id = $id;

        $url_page = request()->url();

        $this->slug = last(explode('/', $url_page));

        $this->page = Route::currentRouteName();
    }

    public function saveComment()
    {
        // $this->validateOnly('comment');
        $this->validate([
            'comment' => 'required|min:3',
        ]);

        if (!Auth::check()) {
            $this->dispatch('showError', 'Vui lòng đăng nhập để bình luận');
            return redirect()->route('login');
        }

        $user_id = Auth::user()->id;

        if ($this->page == 'car-detail') {
            $carComment = Car::where('slug', $this->slug)->first();

            CommentsModel::create([
                'body' => htmlspecialchars($this->comment),
                'user_id' => $user_id,
                'car_id' => $carComment->id,
                'news_id' => 0
            ]);
        }

        if($this->page == 'news.index') {
            $slug = str_replace('.html', '', $this->slug);
            $newComment = News::where('slug', $slug)->first();

            if(strlen($this->comment) > 0) {
                CommentsModel::create([
                    'body' => htmlspecialchars($this->comment),
                    'user_id' => $user_id,
                    'car_id' => 0,
                    'news_id' => $newComment->id
                ]);
            }

        }

        $this->resetComment();

        $this->dispatch('renderComments');
    }


    public function resetComment() {
        $this->comment = null;
        $this->reset();

        // dd(123123123);
    }



    public function render()
    {
        return view('livewire.comments.comment');
    }
}
