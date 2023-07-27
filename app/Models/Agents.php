<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Agents extends Model
{
    use SoftDeletes,SoftDeletes;
    protected $guarded=[];
    use HasFactory;
    public function Domaine():BelongsTo
    {
        return $this->belongsTo(Domaines::class,'domaine_id');
    }
    public function Dotations():HasMany
    {
        return $this->hasMany(Dotations::class);
    }
    public function AgentAppartenirClients():BelongsToMany
    {
        return $this->belongsToMany(Clients::class,'agent_appartenir_clients')->withPivot("id","created_at")->whereNull('agent_appartenir_clients.deleted_at');
    }
    
}
