<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contrat extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Entreprises():BelongsTo
    {
        return $this->belongsTo(Entreprise::class,"entreprise_id");
    }
    public function Clients():BelongsTo
    {
        return $this->belongsTo(Client::class,"client_id");
    }
    public function AgentAffecterContrats():BelongsToMany
    {
        return $this->belongsToMany(Agent::class,'agent_affecter_contrats')->withPivot("id","created_at")->whereNull('agent_affecter_contrats.deleted_at');
    }
}
