<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(3)->get();
        return view('mydashboard', [ 'projects' => $projects ]);
    }

    public function projects()
    {
        $projects = Project::latest()->get();
        return view('projects', [ 'projects' => $projects ]);
    }
}
