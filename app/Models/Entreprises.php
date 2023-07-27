<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entreprises extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Users():HasMany
    {
       return $this->hasMany(Users::class);
    }
    public function Configurations():HasMany
    {
       return $this->hasMany(Configurations::class);
    }
}
