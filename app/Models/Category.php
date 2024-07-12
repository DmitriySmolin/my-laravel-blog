<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasManyThrough(Comment::class, Post::Class, 'category_id', 'commentable_id', 'id', 'id');
    }

    public function comment()
    {
        return $this->hasOneThrough(Comment::class, Post::Class)->latest();
    }
}
