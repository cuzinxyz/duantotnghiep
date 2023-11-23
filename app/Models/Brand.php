<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'brand_name',
        'logo_url'
    ];

    protected $guarded = ['id'];

    public function user(): BelongsTo {
      return $this->belongsTo(User::class);
    }
}
