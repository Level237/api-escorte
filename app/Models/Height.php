<?php

namespace App\Models;

use App\Models\Escort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Height extends Model
{
    use HasFactory;

    protected $fillable=[
        'height_name'
    ];

    public function escorts():HasMany{
        return $this->hasMany(Escort::class);
    }
}
