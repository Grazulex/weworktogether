<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $lastestBlogs = Blog::latest()->take(3)->get();
        $tags = Blog::all()->pluck('tags')->flatten()->unique();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        $blogsByTag = Blog::all()->groupBy('tags');

        return view('pages.blogs', compact('blogs', 'lastestBlogs', 'tags', 'blogsByTag'));
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $otherBlogs = Blog::where('slug', '!=', $slug)->latest()->take(3)->get();

        return view('pages.blog', compact('blog', 'otherBlogs'));
    }
}
