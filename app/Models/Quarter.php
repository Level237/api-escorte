<?php

namespace App\Models;
use App\Models\Town;
use App\Models\Escort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quarter extends Model
{
    use HasFactory;

    protected $fillable=[
        'quarter_name',
        'town_id'
    ];
     /**
     * Get the town that owns the quarter.
     */
    public function town()
    {
        return $this->belongsTo(Town::class);
    }

    public function escorts():HasMany{
        return $this->hasMany(Escort::class);
    }
}
