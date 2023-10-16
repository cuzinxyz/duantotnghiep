<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demnad extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];
    public function user():BelongsTo{
      return $this->belongsTo(User::class);
    }
    public function brand():BelongsTo{
      return $this->belongsTo(Brand::class);
    }
    public function car_model():BelongsTo{
      return $this->belongsTo(ModelCar::class);
    }
}
