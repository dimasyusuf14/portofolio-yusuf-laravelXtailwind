<?php

namespace App\Http\Controllers;

use App\Models\WebSetting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $aboutdata = WebSetting::select('about_title', 'about_description', 'about_image1', 'about_image2')
            ->orderBy('id', 'desc')->first();
            return view('frontend.about.about-me', compact('aboutdata'));
    }
}
