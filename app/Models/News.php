<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function news(): BelongsTo
    {
        return $this->belongsTo(News::class);
    }
}
