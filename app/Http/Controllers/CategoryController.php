<?php

namespace App\Http\Controllers;
 use \App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::get();
        // return $categories;
        return view('category.index', compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }

     public function store(request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            // 'is_active' => 'required|boolean',
            'is_active' => 'sometimes',
        ]);

        // Create a new category
       Category::create([
            'name' => $request->name,
            'description' => $request->description,
            // 'is_active' => $request->is_active,
            'is_active' =>$request->is_active==true ? 1:0,
        ]);

        // Redirect to the index page with a success message
        return redirect('categories/create')->with('status', 'Category created successfully.');
    }

    // editing and updating
    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        // return $category;
        return view('category.edit', compact('category'));
    }

    public function update(request $request,int $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            // 'is_active' => 'required|boolean',
            'is_active' => 'sometimes',
        ]);

        // Create a new category
       Category::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            // 'is_active' => $request->is_active,
            'is_active' =>$request->is_active==true ? 1:0,
        ]);

        // Redirect to the index page with a success message
        // return redirect('categories/create')->with('status', 'Category created successfully.');
        return redirect()->back()->with('status', 'Category updated successfully.');
    }

    // deleting
    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        // Redirect to the index page with a success message
        return redirect('categories')->with('status', 'Category deleted successfully.');
    }
    // public function show(int $id)
    // {
    //     $category = Category::findOrFail($id);
    //     return view('category.show', compact('category'));
    // }
    // public function toggleActive(int $id)
    // {
    //     $category = Category::findOrFail($id);
    //     $category->is_active = !$category->is_active;
    //     $category->save();

    //     return redirect()->back()->with('status', 'Category status updated successfully.');
    // }

}
