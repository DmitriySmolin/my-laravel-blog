<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::all();
        Post::factory(30)->create()->each(function ($post) use ($tags) {
            $post->tags()->attach(
                $tags->random(5)->pluck('id')->toArray(),
                ['taggable_type' => Post::class]
            );
        });
    }
}
