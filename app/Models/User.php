<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Escort;
use App\Models\Question;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'phone_number',
        'role_id',
        'password',
        'suspended_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function ban()
    {
        $this->suspended_at = now();
        $this->save();
    }

    public function activate()
    {
        $this->suspended_at = null;
        $this->save();
    }

    public function findForPassport($username) {
        return $this->where('phone_number','=', $username)->first();
    }

    public function role():HasOne{
        return $this->hasOne(Role::class);
    }

    public function Escort():HasMany{
        return $this->hasMany(Escort::class);
    }

    public function questions():BelongsToMany{
        return $this->belongsToMany(Question::class)->withPivot('answer');;
    }
}
