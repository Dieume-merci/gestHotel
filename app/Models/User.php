<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

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
    public function Domaines():HasMany
    {
        return $this->hasMany(Domaine::class);
    }
    public function Dotations():HasMany
    {
        return $this->hasMany(Dotation::class);
    }
    public function Reservations():HasMany
    {
        return $this->hasMany(Reservation::class);
    }
    public function Agents()
    {
        return $this->hasManyThrough(
            Agent::class,
            Domaine::class,
            'user_id',
            'domaine_id',
            'id',
            'id',
        );
    }
    public function Entreprises():BelongsTo
    {
       return $this->belongsTo(Entreprise::class,'entreprise_id');
    }
}
