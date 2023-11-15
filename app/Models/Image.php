<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Escort;

class Image extends Model
{
    use HasFactory;

    public function escort():BelongsToMany{
        return $this->belongsToMany(Escort::class);
    }
}
