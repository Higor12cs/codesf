<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', true)
            ->where('published_at', '<=', now())
            ->where(function ($query) {
                $query->whereNull('published_until')
                    ->orWhere('published_until', '>=', now());
            })
            ->paginate(10);

        return view('posts', compact('posts'));
    }

    public function show(Post $post)
    {
        if (! $post->is_published) {
            abort(404);
        }

        if ($post->published_at > now()) {
            abort(404);
        }

        if ($post->published_until && $post->published_until < now()) {
            abort(404);
        }

        return view('post', compact('post'));
    }
}
