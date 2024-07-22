<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('is_published', true)
            ->where('published_at', '<=', now())
            ->where(function ($query) {
                $query->whereNull('published_until')
                    ->orWhere('published_until', '>=', now());
            })
            ->paginate(10);

        return view('projects', compact('projects'));
    }

    public function show(Project $project)
    {
        if (! $project->is_published) {
            abort(404);
        }

        if ($project->published_at > now()) {
            abort(404);
        }

        if ($project->published_until && $project->published_until < now()) {
            abort(404);
        }

        return view('project', compact('project'));
    }
}
