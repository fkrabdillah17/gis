<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Regency extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function province():BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
}
