<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Weight extends Model
{
    use HasFactory;

    protected $fillable=[
        'weight_name'
    ];

    public function escorts():HasMany{
        return $this->hasMany(Escort::class);
    }
}
