<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\ModelCar;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Kjmtrue\VietnamZone\Models\Province;
use Kjmtrue\VietnamZone\Models\District;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends Model implements Viewable
{
    use HasFactory, SoftDeletes;
    use InteractsWithViews;

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
        'description',
        'salon_id',
        'status'
    ];

    protected $casts = [
        'contact' => 'array',
        'car_info' => 'array',
        'verhicle_image_library' => 'array',
        'recommended' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'city_id');
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(ModelCar::class, 'model_car_id', 'id');
    }

    public function countWishlish($carID)
    {
        return Wishlist::where('car_id', $carID)->count();
    }

    public function countComments($carID)
    {
        return Comments::where('car_id', $carID)->count();
    }

    public function comments() {
        return $this->hasMany(Comments::class);
    }

    public function collaborator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'collaborator_id', 'id');
    }
    
    public function salon(): BelongsTo
    {
        return $this->BelongsTo(Salon::class, 'salon_id', 'id');
    }

    public function services(): BelongsToMany {
        return $this->belongsToMany(Service::class, 'purchased_service', 'car_id', 'service_id')->withPivot('expired_date');
    }

    
}
