<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Escort;
use App\Models\Announcement;

class Image extends Model
{
    use HasFactory;

    public function escort():BelongsToMany{
        return $this->belongsToMany(Escort::class);
    }

    public function ads():BelongsToMany{
        return $this->belongsToMany(Announcement::class);
    }
}
