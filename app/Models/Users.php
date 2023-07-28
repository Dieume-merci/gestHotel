<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory,SoftDeletes;
    public function Domaines():HasMany
    {
        return $this->hasMany(Domaine::class);
    }
    public function Dotations():HasMany
    {
        return $this->hasMany(Dotation::class);
    }
    public function Reserves():HasMany
    {
        return $this->hasMany(Reserve::class);
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
    public function Entreprise():BelongsTo
    {
       return $this->belongsTo(Users::class,'entreprises_id');
    }

}
