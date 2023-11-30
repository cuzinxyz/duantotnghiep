<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'user_id'
    ];

    protected $casts = [
        'image_salon' => 'array'
    ];
}
