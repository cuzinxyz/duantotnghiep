<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reported extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['from_user_id', 'to_user_id', 'car_id', 'content'];
    public function fromUsers()
    {
        return $this->belongsTo(User::class, 'from_user_id', 'id');
    }

    public function toUsers()
    {
        return $this->belongsTo(User::class, 'to_user_id', 'id');
    }

    public function cars()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    public function collaborator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'collaborator_id', 'id');
    }
}
