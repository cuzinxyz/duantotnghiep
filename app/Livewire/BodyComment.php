<?php

namespace App\Livewire;

use App\Models\Comments;
use App\Models\User;
use Livewire\Component;

class BodyComment extends Component
{
  public $body;
  public $comments;
  public $parent_id;
  public $reply_body;
  public $replyToCommentId = null;

  public function mount()
  {
    $this->comments = Comments::with('comments')->where('parent_id',0)->orderBy('created_at','desc')->get();
  }

  public function addComment()
  {
    $user = User::find(1);
    if ($user) {
      if ($this->replyToCommentId) {
        $parentComment = Comments::find($this->replyToCommentId);

        if ($parentComment) {
          $newComment = new Comments();
          $newComment->user_id = $user->id;
          $newComment->body = $this->reply_body;
          $newComment->parent_id = $parentComment->id;
          $newComment->save();
        }
      }else {
          $newComment = new Comments();
          $newComment->user_id = $user->id;
          $newComment->body = $this->body;
          $newComment->parent_id = 0;
          $newComment->save();
        }
      }
    $this->body = '';
    $this->replyToCommentId = null;
    $this->mount();
  }
  public function deleteComment($commentId)
  {

      $deleteComment = Comments::find($commentId);
       if ($deleteComment) {
        $deleteComment->delete();
         $this->mount();
      }
    }

  public function setReplyToCommentId($commentId)
  {
    $this->replyToCommentId = $commentId;
  }

  public function render()
  {
    return view('livewire.body-comment');
  }
}
