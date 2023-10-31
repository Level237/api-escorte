<?php

namespace App\Models;
use App\Models\Country;
use App\Models\Quarter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Town extends Model
{
    use HasFactory;

    protected $fillable=[
        'town_name',
        'country_id'
    ];
    /**
     * Get the quarters for the current town.
     */
    public function quarters()
    {
        return $this->hasMany(Quarter::class);
    }
    public function country():BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
