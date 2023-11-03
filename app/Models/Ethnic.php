<?php

namespace App\Models;

use App\Models\Escort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ethnic extends Model
{
    use HasFactory;

    protected   $fillable=[
        'ethnic_name'
    ];

    public function escort():HasMany{
        return $this->hasMany(Escort::class);
    }
}
