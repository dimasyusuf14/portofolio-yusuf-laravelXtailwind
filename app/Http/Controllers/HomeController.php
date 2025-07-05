<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\WebSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __invoke()
    // {
    //     $landingdata = WebSetting::select('landing_title', 'landing_description', 'landing_image')
    //         ->orderBy('id', 'desc')->first();
    //         return view('frontend.home.index', compact('landingdata'));
    // }

    public function index()
    {
        $landingdata = WebSetting::select('landing_title', 'landing_description', 'landing_image')
            ->orderBy('id', 'desc')->first();
        $projectsHighlight = Project::with('category')->latest()->take(4)->get();
        return view('frontend.home.index', compact('landingdata', 'projectsHighlight'));
    }
}
