<?php

namespace App\Models;
use App\Models\Town;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
    use HasFactory;

     /**
     * Get the town that owns the quarter.
     */
    public function town(): BelongsTo
    {
        return $this->belongsTo(Town::class);
    }
}
