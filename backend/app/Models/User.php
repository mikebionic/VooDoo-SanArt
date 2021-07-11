<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends \TCG\Voyager\Models\User
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    const IMAGE_DIR = 'users';
    const IMAGE_DEFAULT_PATH = 'default.jpg';

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function locationId()
    {
        return $this->location();
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'user_id');
    }

    public function getAvatarPathAttribute()
    {
        $avatar = $this->attributes['avatar'];
        if (!$avatar) return null;
        if (!Str::startsWith($avatar, 'storage')) {
            if (!Str::startsWith($avatar, self::IMAGE_DIR)) {
                $avatar = 'storage/' . self::IMAGE_DIR . '/' . $avatar;
            }
            else {
                $avatar = 'storage/'. $avatar;
            }
        }
        return $avatar;
    }

}
