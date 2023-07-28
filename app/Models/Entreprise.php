<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entreprise extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Users():HasMany
    {
       return $this->hasMany(User::class);
    }
    public function Configurations():HasMany
    {
       return $this->hasMany(Configuration::class);
    }
}
