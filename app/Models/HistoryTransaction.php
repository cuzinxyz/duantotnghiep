<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoryTransaction extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [
        'id'
    ];
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
