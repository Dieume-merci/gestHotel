<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Domaine extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Agents():HasMany
    {
        return $this->hasMany(Agent::class);
    }
    public function Dotations()
    {
        return $this->hasManyThrough(
            Agent::class,
            Dotation::class,
            'agent_id',
            'domain_id',
            'id',
            'id',
        );
    }
    public function Users():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
