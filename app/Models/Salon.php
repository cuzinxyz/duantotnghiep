<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salon extends Model
{
    use HasFactory;

    protected $fillable = [
        'salon_name',
        'address',
        'image_salon',
        'city_id',
        'district_id',
        'description',
        'phone_number',
        'email',
        'expired_date',
        'status'
    ];


    protected $casts = [
        'image_salon' => 'array'
    ];

    public function cars() :hasMany 
    {
        return $this->hasMany(Car::class);
    }

    public function user(): hasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
