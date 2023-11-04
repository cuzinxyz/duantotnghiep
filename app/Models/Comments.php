<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comments extends Model
{
    use HasFactory;
    protected $table = "comments";
    protected $fillable = ['user_id','body','parent_id'];

    public function user(): BelongsTo{
      return $this->belongsTo(User::class);
    }
    public function comments(){
      return $this->hasMany(Comments::class,'parent_id');
    }
//
//    public function car(): BelongsTo{
//      return $this->belongsTo(Car::class);
//    }
//
//    public function news(): BelongsTo{
//      return $this->belongsTo(News::class);
//    }
}
