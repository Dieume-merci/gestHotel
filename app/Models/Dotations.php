<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dotations extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Reserve():BelongsTo
    {
        return $this->belongsTo(Reserves::class,"reserves_id");
    }
    public function Agent():BelongsTo
    {
        return $this->belongsTo(Agents::class,"agents_id");
    }
}