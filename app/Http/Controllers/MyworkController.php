<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class MyworkController extends Controller
{
    public function myWorks()
    {
        $projects = Project::latest()->get();
        return view('frontend.project.my-works', compact('projects'));
    }
}
