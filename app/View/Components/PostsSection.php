<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostsSection extends Component
{
    public function render(): View
    {
        $posts = Post::query()
            ->where('is_published', true)
            ->where('published_at', '<=', now())
            ->where(function ($query) {
                $query->whereNull('published_until')
                    ->orWhere('published_until', '>=', now());
            })
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('components.posts-section', compact('posts'));
    }
}
