<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'page' => 'Blog',
            'title' => 'All Blog',
            'blogs' => Blog::with(['user', 'category'])->latest()->get(),
        ]);
    }

    public function detail(Blog $blog)
    {
        return view('blog.detail', [
            'page' => 'Blog',
            'blog' => $blog,
        ]);
    }
}
