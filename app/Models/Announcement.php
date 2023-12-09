<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Town;
use App\Models\Quarter;
use App\Models\AnnouncementCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Announcement extends Model implements Searchable
{
    use HasFactory;

    public function town():BelongsTo{
        return $this->belongsTo(Town::class);
    }

    public function quarter():BelongsTo{
        return $this->belongsTo(Quarter::class);
    }

    public function images():BelongsToMany{
        return $this->belongsToMany(Image::class);
    }

    public function category():BelongsTo{
        return $this->belongsTo(AnnouncementCategory::class, 'announcement_category_id','id' );
    }

    public function User():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('announces.show', $this->id);
     
         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url
         );
    }


}
