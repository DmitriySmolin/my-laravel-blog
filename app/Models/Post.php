<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
