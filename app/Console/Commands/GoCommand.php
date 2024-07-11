<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $category = Category::find(5);
//        dd($category->comments->toArray());
        // dd($category->comment->toArray());
        // $comment = Comment::first();
        // dd($comment->category->toArray());

        $user = User::first();
        // dd($user->comments->toArray());
        // dd($user->comment->toArray());

        $comment = Comment::first();
        dd($comment->user->toArray());
    }
}
