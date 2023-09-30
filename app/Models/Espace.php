<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Espace extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Type():BelongsTo
    {
        return $this->belongsTo(Type::class,"type_id");
    }
    public function User():BelongsTo
    {
        $this->belongsTo(User::class,"user_id");
    }
    public function Reservations():HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
