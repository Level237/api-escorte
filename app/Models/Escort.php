<?php

namespace App\Models;

use App\Models\User;

use App\Models\Image;
use App\Models\Shape;
use App\Models\Ethnic;
use App\Models\Height;
use App\Models\Weight;
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
}
