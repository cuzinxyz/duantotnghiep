<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'news';
    protected $fillable = [
      'title',
     'content',
     'summary',
     'thumbnailImage',
     'viewCount',
     'shareCount',
    'isPublished',
    'user_id',
    ];
  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }
}
