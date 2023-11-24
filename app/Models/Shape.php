<?php

namespace App\Models;

use App\Models\Escort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Shape extends Model implements Searchable
{
    use HasFactory;

    protected $fillable=[
        'shape_name'
    ];

    public function escort():HasMany{
        return $this->hasMany(Escort::class);
    }

    public function getSearchResult(): SearchResult
     {
        $url = route('escorts.show', $this->id);
     
         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->escort_name,
            $url
         );
     }
}
