<?php

namespace App\Models;

use App\Models\Image;

use App\Models\Country;
use App\Models\Quarter;
use App\Models\Service;
use App\Models\Escort_physical;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Escort extends Model
{
    use HasFactory;

    protected $fillable=[
        'whatsapp_number',
        'sexuality',
        'year_of_birth',
        'description',
        'photo',
        'quarter_id',
        'isVerified'
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
}
