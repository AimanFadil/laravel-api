<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {

        $projects = Project::all()/* ->paginate(3) */;
        /* $projects = Project::with(['type', 'technologies']); */
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show($slug)
    {

        $project = Project::all()->where('slug', $slug)->first();
        return response()->json([
            'success' => true,
            'project' => $project
        ]);
    }
}
