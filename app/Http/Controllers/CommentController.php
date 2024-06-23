<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    public function store()
    {
        $category = $this->getData();
        $data = Comment::create($category);
        dd($data);
    }

    public function index()
    {
        return Comment::all();
    }

    public function show(Comment $category)
    {
        return $category;
    }

    public function update(Comment $comment)
    {
        $comment->update(
            [
                'content' => 'test comment',
                'author' => 'Alex',
                'like' => 5
            ]
        );

        return $comment;
    }

    public function destroy()
    {
        $category = Comment::find(1);

        $category->delete();

        return Response::HTTP_NO_CONTENT;
    }

    protected function getData()
    {
        return [
            'content' => 'my comment',
            'author' => 'Dmitry',
            'like' => 15
        ];
    }
}
