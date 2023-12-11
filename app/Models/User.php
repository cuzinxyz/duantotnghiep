<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Car;
use App\Models\Salon;
use App\Models\Demnad;
use App\Models\Support;
use App\Models\Reported;
use App\Models\WithDraw;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'account_balence',
        'phone_number',
        'total_assign',
        'active',
        'is_collaborator',
        'social_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function car(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function byCar(): HasMany
    {
        return $this->hasMany(Demnad::class);
    }

    public function salon(): HasMany {
        return $this->hasMany(Salon::class);
    }

    public function support(): HasMany {
        return $this->hasMany(Support::class);
    }

    public function report(): HasMany {
        return $this->hasMany(Reported::class,'from_user_id', 'id');
    }

    public function withDraw(): HasMany {
        return $this->hasMany(withDraw::class);
    }

    public function carCollaborator(): HasMany
    {
        return $this->hasMany(Car::class, 'collaborator_id', 'id');
    }

    public function demnadCollaborator(): HasMany
    {
        return $this->hasMany(Demnad::class, 'collaborator_id', 'id');
    }

    public function supportCollaborator(): HasMany
    {
        return $this->hasMany(Support::class, 'collaborator_id', 'id');
    }

    public function salonCollaborator(): HasMany
    {
        return $this->hasMany(Salon::class, 'collaborator_id', 'id');
    }

    public function withDrawCollaborator(): HasMany
    {
        return $this->hasMany(WithDraw::class, 'collaborator_id', 'id');
    }

    public function reportCollaborator(): HasMany
    {
        return $this->hasMany(Reported::class, 'collaborator_id', 'id');
    }

    public function transactions_histories() {
        return $this->HasMany(TransactionsHistory::class);
    }

    public function collaborator() : HasOne
    {
        return $this->hasOne(Collaborator::class);
    }
}
