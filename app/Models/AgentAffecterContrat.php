<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AgentAffecterContrat extends Model
{
    use HasFactory;
    public function Contrat():BelongsTo
    {
        return $this->belongsTo(Contrat::class);
    }
}
