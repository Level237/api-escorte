<?php

namespace App\Models;

use App\Models\Escort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shape extends Model
{
    use HasFactory;

    protected $fillable=[
        'shape_name'
    ];

    public function escort():HasMany{
        return $this->hasMany(Escort::class);
    }
}
