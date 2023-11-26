<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Service extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'service_name',
    'price',
    'description',
    'expiration_date',
    'title',
    'number_of_pushes'
  ];

  public function purchased_services($service_id)
  {
    return DB::table('purchased_service')
      ->where('service_id', $service_id)
      ->pluck('remaining_push');
  }
}
