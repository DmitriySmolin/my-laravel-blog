<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Tag;
use Illuminate\Http\Response;

class TagController extends Controller
{
    public function store()
    {
        $tag = $this->getData();
        $data = Tag::create($tag);
        dd($data);
    }

    public function index()
    {
        return Tag::all();
    }

    public function show(Tag $tag)
    {
        return $tag;
    }

    public function update(Tag $tag)
    {
        $tag->update(
            [
                'title' => 'articles'
            ]
        );

        return $tag;
    }

    public function destroy()
    {
        $tag = Tag::find(1);

        $tag->delete();

        return Response::HTTP_NO_CONTENT;
    }

    protected function getData()
    {
        return [
            'title' => 'projects'
        ];
    }
}
