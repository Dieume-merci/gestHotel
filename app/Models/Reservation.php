<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Espace():BelongsTo
    {
    return $this->belongsTo(Espace::class,"espace_id");
    }
    public function Client():BelongsTo
    {
        return $this->belongsTo(Client::class,"client_id");
    }
}
