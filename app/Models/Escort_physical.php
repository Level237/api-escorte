<?php

namespace App\Models;

use App\Models\Escort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Escort_physical extends Model
{
    use HasFactory;

    protected $fillable=[
        "escort_id",
        "skin_color_id"
    ];

    public function escort():HasMany{
        return $this->hasMany(Escort::class);
    }
}
