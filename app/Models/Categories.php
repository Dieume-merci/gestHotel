<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categories extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Reserves():HasMany
    {
        return $this->hasMany(Reserves::class);
    }
    public function Dotations()
    {
        return $this->hasManyThrough(
            Dotations::class,
            Reserves::class,
            'categories_id',
            'reserves_id',
            'id',
            'id',
        );
    }
}
