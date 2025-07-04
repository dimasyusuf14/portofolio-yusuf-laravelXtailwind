<?php

namespace App\Http\Controllers;

use App\Models\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $websetting = WebSetting::latest()->first();
        return view('backend.websetting.index', compact('websetting'));
    }

    /**
     * Display a listing of the resource.
     */
    public function show(string $id)
    {
        $webSetting = WebSetting::findOrFail($id);
        return view('backend.webSetting.update', compact('webSetting'));
    }

    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return view('backend.webSetting.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'landing_title' => 'required|string',
                'landing_description' => 'required|string',
                'about_title' => 'required|string',
                'about_description' => 'required|string',
                'landing_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'about_image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'about_image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            if ($request->hasFile('landing_image')) {
                $validated['landing_image'] = $request->file('landing_image')->store('store_websetting', 'public');
            }

            if ($request->hasFile('about_image1')) {
                $validated['about_image1'] = $request->file('about_image1')->store('store_websetting', 'public');
            }

            if ($request->hasFile('about_image2')) {
                $validated['about_image2'] = $request->file('about_image2')->store('store_websetting', 'public');
            }

            WebSetting::create($validated);

            return redirect()->back()->with('success', 'Pengaturan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan pengaturan. Error: ' . $e->getMessage());
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validated = $request->validate([
                'landing_title' => 'required|string|max:255',
                'landing_description' => 'required|string',
                'about_title' => 'required|string|max:255',
                'about_description' => 'required|string',
                'landing_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'about_image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'about_image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $websetting = WebSetting::findOrFail($id);

            if ($request->hasFile('landing_image')) {
                if ($websetting->landing_image) {
                    Storage::disk('public')->delete($websetting->landing_image);
                }
                $validated['landing_image'] = $request->file('landing_image')->store('websetting', 'public');
            }

            if ($request->hasFile('about_image1')) {
                if ($websetting->about_image1) {
                    Storage::disk('public')->delete($websetting->about_image1);
                }
                $validated['about_image1'] = $request->file('about_image1')->store('websetting', 'public');
            }

            if ($request->hasFile('about_image2')) {
                if ($websetting->about_image2) {
                    Storage::disk('public')->delete($websetting->about_image2);
                }
                $validated['about_image2'] = $request->file('about_image2')->store('websetting', 'public');
            }

            $websetting->update($validated);

            return redirect()->intended('/backend/webSetting')->with('success', 'Websetting berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal memperbarui pengaturan.'])->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $websetting = WebSetting::findOrFail($id);
            if ($websetting->landing_image) {
                Storage::disk('public')->delete($websetting->landing_image);
            }
            if ($websetting->about_image) {
                Storage::disk('public')->delete($websetting->about_image);
            }
            $websetting->delete();
            return redirect()->back()->with('success', 'Pengaturan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus pengaturan.');
        }
    }
}
