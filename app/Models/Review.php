<?php

namespace App\Models;

use App\Models\User;
use App\Models\Escort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable=[
        'escort_id',
        'user_id',
        'star',
        'comment'
    ];

    public function escort():BelongsTo{
        return $this->belongsTo(Escort::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
