<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Role;
use App\Models\Comment;
use App\Models\User;
use App\Models\Product;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function profileable()
    {
        return $this->morphTo();
    }
}
