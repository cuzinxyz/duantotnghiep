<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'contact' => 'array',
        'car_info' => 'array',
        'verhicle_image_library' => 'array',
        'recommended' => 'boolean',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
}
