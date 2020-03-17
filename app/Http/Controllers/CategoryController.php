<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Get all categories
     */
    public function index()
    {
        return response()->json(Category::all()->toArray());
    }

    /**
     * Create a new category
     */
    public function store(Request $request)
    {
        $category = Category::create($request->only('name'));

        return response()->json([
            'status' => (bool) $category,
            'message'=> $category ? 'Category Created' : 'Error Creating Category'
        ]);
    }

    /**
     * Get a category
     */
    public function show(Category $category)
    {
        return response()->json($category);
    }

    /**
     * Get all tasks in a category
     */
    public function tasks(Category $category)
    {
        return response()->json($category->tasks()->orderBy('order')->get());
    }

    /**
     * Update a category
     */
    public function update(Request $request, Category $category)
    {
        $status = $category->update($request->only('name'));

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Category Updated!' : 'Error Updating Category'
        ]);
    }

    /**
     * Destroy a category
     */
    public function destroy(Category $category)
    {
        $status  = $category->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Category Deleted' : 'Error Deleting Category'
        ]);
    }

}
