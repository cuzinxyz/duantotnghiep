<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReplyComments extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'body',
      'comment_id',
      'user_id',
      'car_id',
      'news_id'
    ];

    protected $table = "reply_comments";

    public function comment(): BelongsTo{
      return $this->belongsTo(Comments::class)->orderBy('created_at', 'desc');
    }
    public function user(): BelongsTo{
      return $this->belongsTo(User::class)->orderBy('created_at', 'desc');
    }
    public function car(): BelongsTo{
      return $this->belongsTo(Car::class)->orderBy('created_at', 'desc');
    }
    public function news(): BelongsTo{
      return $this->belongsTo(News::class)->orderBy('created_at', 'desc');
    }
}
