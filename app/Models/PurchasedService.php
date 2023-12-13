<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedService extends Model
{
    use HasFactory;

    protected $table = 'purchased_service';

    protected $fillable = [
        'user_id',
        'service_id',
        'car_id',
        'remaining_push',
        'expired_date'
    ];
}
