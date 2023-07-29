<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentAffecterContrat extends Model
{
    use HasFactory;
    // public function Domaine():BelongsTo
    // {
    //     return $this->belongsTo(Maternite::class);
    // }
    // public function Dotations():HasMany
    // {
    //     return $this->hasMany(Dotation::class);
    // }
    // public function AgentAappartenirEntreprises():BelongsToMany
    // {
    //     return $this->belongsToMany(Entreprise::class,'agent_appartenir_entreprises')->withPivot("id","created_at")->whereNull('agent_appartenir_entreprises.deleted_at');
    // }
    // public function Attestation()
    // {
    //     return $this->hasManyThrough(
    //         Attestation::class,
    //         Bebe::class,
    //         'accouchement_id',
    //         'bebe_id',
    //         'id',
    //         'id',
    //     );
    // }
}
