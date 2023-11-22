<?php

namespace App\Models;

use App\Models\User;
use App\Models\Payment;
use App\Models\Membership;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Memberships_user extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'membership_id',
        'payment_id',
        'announcement_id',
        'expire_at',
        'status'
    ];

    public function memberships():HasMany{
        return $this->hasMany(Membership::class);
    }
    public function payments():HasMany{
        return $this->hasMany(Payment::class);
    }
    public function announcements():HasMany{
        return $this->hasMany(Announcement::class);
    }

    public function users():HasMany{
        return $this->hasMany(User::class);
    }
}
