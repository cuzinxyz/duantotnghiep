<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demnad extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'user_id',
      'status',
      'title',
      'content',
      'reason',
    ];

    public function user():BelongsTo
    {
      return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function collaborator():BelongsTo
    {
      return $this->belongsTo(User::class, 'collaborator_id', 'id');
    }
}
