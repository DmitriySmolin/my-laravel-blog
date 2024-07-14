<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    // public function profile() {
    //     return $this->hasOne(Profile::class);
    // }

//    public function comments()
//    {
//        return $this->hasManyThrough(Comment::class, Profile::Class);
//    }

    public function comments()
    {
        return $this->hasManyThrough(Comment::class, Profile::class, 'profileable_id', 'profile_id')
            ->where('profileable_type', User::class);
    }

    public function comment()
    {
        return $this->hasOneThrough(Comment::class, Profile::class, 'profileable_id', 'profile_id')
            ->where('profileable_type', User::class)->latest();
    }

    public function profile()
    {
        return $this->morphOne(Profile::class, 'profileable');
    }

}
