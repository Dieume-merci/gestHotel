<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categorie extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Reserves():HasMany
    {
        return $this->hasMany(Reserve::class);
    }
    public function Dotations()
    {
        return $this->hasManyThrough(
            Dotation::class,
            Reserve::class,
            'categorie_id',
            'reserve_id',
            'id',
            'id',
        );
    }
}