<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tag\StoreRequest;
use App\Http\Requests\Api\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Response;

class TagController extends Controller
{
    public function index()
    {
        return Tag::all();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $tag = Tag::create($data);
        return $tag;
    }

    public function show(Tag $tag)
    {
        return $tag;
    }

    public function update(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return $tag;
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return response([], response::HTTP_NO_CONTENT);
    }
}
