<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\ModelCar;
use Illuminate\Database\Eloquent\Model;
use Kjmtrue\VietnamZone\Models\Province;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'price',
        'user_id',
        'brand_id',
        'model_car_id',
        'city_id',
        'district_id',
        'full_address',
        'recommended',
        'contact',
        'car_info',
        'verhicle_image_library',
        'verhicle_videos',
        'description'
    ];
    protected $casts = [
        'contact' => 'array',
        'car_info' => 'array',
        'verhicle_image_library' => 'array',
        'verhicle_videos' => 'array',
        'recommended' => 'boolean',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function city() {
        return $this->belongsTo(Province::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'city_id');
    }
}
