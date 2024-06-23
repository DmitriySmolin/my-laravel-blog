<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function store()
    {
        $category = $this->getData();
        $data = Category::create($category);
        dd($data);
    }

    public function index()
    {
        return Category::all();
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(Category $category)
    {
        $category->update(
            ['title' => 'Another Category']
        );

        return $category;
    }

    public function destroy()
    {
        $category = Category::find(1);

        $category->delete();

        return Response::HTTP_NO_CONTENT;
    }

    protected function getData()
    {
        return [
            'title' => 'new Category'
        ];
    }
}
