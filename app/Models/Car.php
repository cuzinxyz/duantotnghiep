<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'price',
        'user_id',
        'brand_id',
        'city',
        'full_address',
        'recommended',
        'contact',
        'car_info',
        'verhicle_image_library',
        'verhicle_videos'
    ];
    protected $casts = [
        'contact' => 'json',
        'car_info' => 'json',
        'verhicle_image_library' => 'json',
        'verhicle_videos' => 'json'
    ];
}
