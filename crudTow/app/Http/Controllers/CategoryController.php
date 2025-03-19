<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        return response()->json($category);
    }
    public function store(StoreCategoryRequest $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }
    public function edit(Category $category)
    {
        
    }
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        
    }
    public function destroy(Category $category)
    {
        //
    }
    
}
