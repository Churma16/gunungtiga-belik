<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Display the sitemap.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return response()->view('sitemap.index', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }
}
