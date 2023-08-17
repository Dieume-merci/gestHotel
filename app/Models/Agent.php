<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Agent extends Model
{
    use SoftDeletes,SoftDeletes;
    protected $guarded=[];
    use HasFactory;
    public function Domaines():BelongsTo
    {
        return $this->belongsTo(Domaine::class,'domaine_id');
    }
    public function Dotations():HasMany
    {
        return $this->hasMany(Dotation::class);
    }
    public function AgentAffecterContrats():BelongsToMany
    {
        return $this->belongsToMany(Contrat::class,'agent_affecter_contrats')->withPivot("id","created_at")->whereNull('agent_affecter_contrats.deleted_at');
    }
    public function Convention():HasOne
    {
        return $this->hasOne(Convention::class);
    }
    public function AgentAffecterContrat():HasOne
    {
        return $this->hasOne(AgentAffecterContrat::class);
    }
    
}
