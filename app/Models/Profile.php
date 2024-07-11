<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Role;
use App\Models\Comment;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function profileable()
    {
        return $this->morphTo();
    }
}
