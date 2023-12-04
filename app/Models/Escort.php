<?php

namespace App\Models;


use App\Models\User;

use App\Models\Image;
use App\Models\Shape;
use App\Models\Ethnic;
use App\Models\Height;
use App\Models\Review;
use App\Models\Weight;
use App\Models\Country;
use App\Models\Quarter;
use App\Models\Service;
use App\Models\Skin_color;
use App\Models\Escort_physical;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Escort extends Model implements Searchable
{
    use HasFactory;

    protected $fillable=[
        "escort_name",
        'whatsapp_number',
        'sexuality',
        'age',
        'description',
        'photo',
        'ethnic_id',
        'shape_id',
        'height_id',
        'weight_id',
        'skin_color_id',
        'quarter_id',
        'user_id',
        'isCompleted',
        'isVerified',
        'genre'
    ];


    public function quarter():BelongsTo{
        return $this->belongsTo(Quarter::class);
    }

    public function images():BelongsToMany{
        return $this->belongsToMany(Image::class);
    }

    public function physical():BelongsTo{
        return $this->belongsTo(Escort_physical::class);
    }

    public function services():BelongsToMany{
        return $this->belongsToMany(Service::class);
    }

    public function User():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function ethnic():BelongsTo{
        return $this->belongsTo(Ethnic::class);
    }

    public function shape():BelongsTo{
        return $this->belongsTo(Shape::class);
    }

    public function height():BelongsTo{
        return $this->belongsTo(Height::class);
    }

    public function weight():BelongsTo{
        return $this->belongsTo(Weight::class);
    }

    public function skin_color():BelongsTo{
        return $this->belongsTo(Skin_color::class);
    }

    public function visits():HasMany{
        return $this->hasMany(Profile_visit::class);
    }

    public function reviews():HasMany{
        return $this->hasMany(Review::class);
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
