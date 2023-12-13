<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelCar extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'model_cars';
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
      'id', 'brand_id', 'model_name'
    ];

    public function brand()
    {
      return $this->belongsTo(Brand::class);
    }
}
