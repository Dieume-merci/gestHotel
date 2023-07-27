<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Domaines extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Agents():HasMany
    {
        return $this->hasMany(Agents::class);
    }
    public function Dotations()
    {
        return $this->hasManyThrough(
            Agents::class,
            Dotations::class,
            'agents_id',
            'domains_id',
            'id',
            'id',
        );
    }
    public function Users():BelongsTo
    {
        return $this->belongsTo(Users::class,'users_id');
    }
}
