<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        foreach ($posts as $post) {
            $post->post_date = $post->created_at->format('d F Y');
            $post->konten = strip_tags($post->konten);

            $excerpt = implode(' ', array_slice(str_word_count($post->konten, 1), 0, 100));
            $post->excerpt = $excerpt;

        }

        return view('user.index', [
            'posts' => $posts
        ]);
    }

    public function detailPost(Post $post)
    {
        $post->post_date = $post->created_at->format('d F Y');
        $posts = Post::latest()->take(6)->get();

        $uniqueMonthYears = $posts->map(function ($post) {
            return $post->created_at->format('F Y');
        })->unique();

        $post_images = PostImage::where('post_id', $post->id)->get();

        return view('user.detail-post', [
            'post' => $post,
            'posts' => $posts,
            'uniqueMonthYears' => $uniqueMonthYears,
            'post_images' => $post_images,

        ]);

    }
}
