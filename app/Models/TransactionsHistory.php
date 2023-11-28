<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionsHistory extends Model
{
    use HasFactory;

    protected $fillable = [
      "user_id",
      "transaction_type",
      "amount",
      "balance_after_transaction",
      "token",
    ];
    
    public function user() {
      return $this->hasMany(User::class, 'id', 'user_id');
    }

}
