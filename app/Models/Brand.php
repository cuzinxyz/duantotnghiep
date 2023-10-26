<?php

namespace App\Models;

use App\Models\ModelCar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "brands";
    protected $fillable = [
      'id', 'brand_name', 'logo_url'
    ];

    protected $guarded = ['id'];

    public function user(): BelongsTo {
      return $this->belongsTo(User::class);
    }

    public function models() 
    {
      return $this->hasMany(ModelCar::class); 
    }
}
