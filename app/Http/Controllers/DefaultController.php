<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class DefaultController extends Controller
{
    public function __invoke()
    {
        $lastestBlogs = Blog::latest()->take(3)->get();

        return view('welcome', compact('lastestBlogs'));
    }
}
