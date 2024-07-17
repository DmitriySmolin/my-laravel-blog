<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

}
