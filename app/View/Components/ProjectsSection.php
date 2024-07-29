<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectsSection extends Component
{
    public function render(): View
    {
        $projects = Project::query()
            ->where('is_published', true)
            ->where('published_at', '<=', now())
            ->where(function ($query) {
                $query->whereNull('published_until')
                    ->orWhere('published_until', '>=', now());
            })
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('components.projects-section', compact('projects'));
    }
}
