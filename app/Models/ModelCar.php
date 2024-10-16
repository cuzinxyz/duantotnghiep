<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelCar extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'model_cars';

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'id', 'brand_id', 'model_name',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
