<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Entreprise extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Users():HasMany
    {
       return $this->hasMany(User::class);
    }
    public function Clients():BelongsToMany
    {
        return $this->belongsToMany(Client::class,'contrats')->withPivot("id","date_debut","date_fin","close","cout","created_at")->whereNull('contrats.deleted_at');
    }
    public function Agents():HasMany
    {
       return $this->hasMany(Agent::class);
    }
}
