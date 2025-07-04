<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::with('categories')->latest()->get();
        return view('backend.project.index', compact('project'));
    }

    public function create()
    {
        try {
            $categories = Category::all();
            return view('backend.project.create', compact('categories'));
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal membuka form tambah project.');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|max:255',
                'client' => 'required|max:255',
                'description' => 'required',
                'image' => 'nullable|image|max:2048',
                'category_ids' => 'required|array',
                'category_ids.*' => 'exists:categories,id',
            ]);

            $data = $request->only(['title', 'client', 'description']);
            $data['slug'] = Str::slug($request->title);

            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('project', 'public');
            }

            $project = Project::create($data);

            // Insert ke pivot table
            $project->categories()->attach($request->category_ids);

            return redirect()->intended('/backend/project')->with('success', 'Project berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Gagal menambahkan project.');
        }
    }

    public function edit(Project $project)
    {
        // try {
        //     return view('backend.project.edit', compact('project'));
        // } catch (\Exception $e) {
        //     return back()->with('error', 'Gagal membuka form edit project.');
        // }
    }

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'title' => 'required|max:255',
                'client' => 'required|max:255',
                'description' => 'required',
                'image' => 'nullable|image|max:2048',
                'category_ids' => 'required|array',
                'category_ids.*' => 'exists:categories,id',
            ]);

            $project = Project::findOrFail($id);

            $data = $request->only(['title', 'client', 'description']);
            $data['slug'] = Str::slug($request->title);

            if ($request->hasFile('image')) {
                if ($project->image) {
                    Storage::disk('public')->delete($project->image);
                }
                $data['image'] = $request->file('image')->store('project', 'public');
            }

            $project->update($data);

            // Sync categories to pivot table
            $project->categories()->sync($request->category_ids);

            return redirect()->intended('/backend/project')->with('success', 'Project berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui project.');
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function show(string $id)
    {
        $project = Project::with('categories')->findOrFail($id);
        $categories = Category::all();
        return view('backend.project.update', compact('project', 'categories'));
    }


    public function destroy(string $id)
    {

        try {
            $project = Project::findOrFail($id);
            $project->delete();
            return redirect()->back()->with('success', 'project succes deleted');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'project failed deleted');
        }
    }
}
