<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dotation extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Reserves():BelongsTo
    {
        return $this->belongsTo(Reserve::class,"reserve_id");
    }
    public function Agents():BelongsTo
    {
        return $this->belongsTo(Agent::class,"agent_id");
    }
}
