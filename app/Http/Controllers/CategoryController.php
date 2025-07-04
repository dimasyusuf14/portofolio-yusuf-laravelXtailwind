<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $categories = Category::latest()->get();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validate = $request->validate([
                'name' => 'required'
            ]);

            Category::create($validate);
            return redirect()->back()->with('success', 'category succes added');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'category not succes added');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.update', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validate = $request->validate([
                'name' => 'required'
            ]);
            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->save();
            return redirect()->intended('/backend/category')->with('success', 'category updated,');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'category failed update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect()->back()->with('success', 'category succes deleted');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'category failed deleted');
        }
    }
}
