<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Support extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'supports';
    protected $fillable = ['id', 'user_id', 'title', 'category', 'body', 'response'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function collaborator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'collaborator_id', 'id');
    }
}
