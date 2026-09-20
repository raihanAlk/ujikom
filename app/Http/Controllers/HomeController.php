<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $albums = Album::latest()->take(6)->get();
        $categories = Category::latest()->get();
        $team = Post::with('category')->latest()->take(4)->get();
        $testimonials = Comment::latest()->take(3)->get();

        return view('welcome', compact('albums', 'categories', 'team', 'testimonials'));
    }
}
