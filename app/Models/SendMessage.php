<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMessage extends Model
{
    use HasFactory;
    protected $table = 'send_message';
    protected $fillable = [
      'user_name',
      'email',
      'phone_number',
      'message'
    ];
}
