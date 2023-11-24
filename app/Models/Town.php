<?php

namespace App\Models;
use App\Models\Country;
use App\Models\Quarter;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Town extends Model implements Searchable
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

     /**
     * Get the ads for the current town.
     */
    public function ads()
    {
        return $this->hasMany(Announcement::class);
    }


    public function country():BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function result(){
        $result = $this->town_name.'('.$this->ads()->count().' Annonces)';
        return $result;
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('escorts.show', $this->id);
     
         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->result(),
            $url
         );
    }
}
