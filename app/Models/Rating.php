<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use HasFactory, SoftDeletes;

    public function fromUsers() {
        return $this->belongsTo(User::class, 'from_user_id', 'id');
    }

    public function toUsers()
    {
        return $this->belongsTo(User::class, 'to_user_id', 'id');
    }
}
