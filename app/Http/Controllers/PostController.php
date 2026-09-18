<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->get();
        return view('posts', compact('posts'));
    }

    public function show(Post $post)
    {
        // Load relasi category dan comments agar komentar tampil di detail
        $post->load(['category', 'comments']);
        return view('detail', compact('post'));
    }

    public function storeComment(Request $request, Post $post)
    {
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->comments()->create($validated);

        return redirect()
            ->route('filament.admin.resources.comments.index')
            ->with('success', 'Komentar berhasil ditambahkan!');
    }
}
