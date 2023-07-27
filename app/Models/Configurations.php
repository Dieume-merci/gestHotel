<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Configurations extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Entreprise():BelongsTo
    {
       return $this->belongsTo(Users::class,'entreprises_id');
    }
}
