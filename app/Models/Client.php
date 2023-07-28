<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Reserves():HasMany
    {
        return $this->hasMany(Reserve::class);
    }
    public function Dotations()
    {
        return $this->hasManyThrough(
            Dotation::class,
            Reserve::class,
            'client_id',
            'reserve_id',
            'id',
            'id',
        );
    }
    public function AgentAappartenirClients():BelongsToMany
    {
        return $this->belongsToMany(Agent::class,'agent_appartenir_clients')->withPivot("id","created_at")->whereNull('agent_appartenir_clients.deleted_at');
    }
}
