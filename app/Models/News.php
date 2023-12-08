<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model implements Viewable
{
    use HasFactory, SoftDeletes;
    use InteractsWithViews;

    protected $table = 'news';
    protected $fillable = [
        'title',
        'slug',
        'content',
        'summary',
        'thumbnailImage',
        'viewCount',
        'shareCount',
        'isPublished',
        'user_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comments::class);
    }

    public function news(): BelongsTo
    {
        return $this->belongsTo(News::class);
    }
}
