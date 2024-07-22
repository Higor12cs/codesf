<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class PostsSection extends Component
{
    public function render(): View
    {
        $posts = Cache::remember('posts', config('cache.cache_time'), function () {
            return Post::query()
                ->where('is_published', true)
                ->where('published_at', '<=', now())
                ->where(function ($query) {
                    $query->whereNull('published_until')
                        ->orWhere('published_until', '>=', now());
                })
                ->latest('published_at')
                ->get();
        });

        return view('components.posts-section', compact('posts'));
    }
}
