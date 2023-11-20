<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
      'body',
      'user_id',
      'car_id',
      'news_id',
    ];


    protected $table = "comments";

    public function user(): BelongsTo{
      return $this->belongsTo(User::class);
    }

    public function car(): BelongsTo{
      return $this->belongsTo(Car::class);
    }

    public function news(): BelongsTo{
      return $this->belongsTo(News::class);
    }

    public function reply(): HasMany {
      return $this->hasMany(ReplyComments::class, 'comment_id', 'id');
    }
}
