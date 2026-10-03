<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', 1)->orderBy('sort_order')->orderBy('id')->get();

        return view('projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('status', 1)->where('slug', $slug)->firstOrFail();

        return view('projects.show', compact('project'));
    }
}
