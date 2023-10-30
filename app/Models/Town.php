<?php

namespace App\Models;
use App\Models\Quarter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    /**
     * Get the quarters for the current town.
     */
    public function quarters()
    {
        return $this->hasMany(Quarter::class);
    }
}
