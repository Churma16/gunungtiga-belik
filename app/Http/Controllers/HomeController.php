<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\PostImage;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);
        }

        $distinctYears = $this->getDistinctYears($posts);
        $distinctCategories = $this->getDistinctCategories();


        return view('user.index', [
            'title' => 'Berita Terkini',
            'posts' => $posts,
            'distinctYears' => $distinctYears,
            'distinctCategories' => $distinctCategories,

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
            'title' => 'Detail Berita',
            'post' => $post,
            'posts' => $posts,
            'uniqueMonthYears' => $uniqueMonthYears,
            'post_images' => $post_images,

        ]);
    }

    public function showByAuthor($author_name)
    {
        $user = User::where('name', $author_name)->first();
        $posts = Post::where('user_id', $user->id)->latest()->get();

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);
        }

        $distinctYears = $this->getDistinctYears($posts);
        $distinctCategories = $this->getDistinctCategories();

        return view('user.index', [
            'title' => 'Berita Berdasarkan Penulis: ' . $user->name,
            'posts' => $posts,
            'distinctYears' => $distinctYears,
            'distinctCategories' => $distinctCategories,
        ]);
    }

    public function showByCategory($category_name)
    {
        $category = Category::where('nama', $category_name)->first();
        $posts = Post::where('category_id', $category->id)->latest()->get();

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);
        }

        $distinctYears = $this->getDistinctYears($posts);
        $distinctCategories = $this->getDistinctCategories();


        return view('user.index', [
            'title' => 'Berita Berdasarkan Kategori: ' . $category->nama,
            'posts' => $posts,
            'distinctYears' => $distinctYears,
            'distinctCategories' => $distinctCategories,
        ]);
    }

    public function showByYear($year)
    {
        $posts = Post::whereYear('created_at', $year)->latest()->get();

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);
        }

        $distinctYears = $this->getDistinctYears($posts);
        $distinctCategories = $this->getDistinctCategories();


        return view('user.index', [
            'title' => 'Berita Tahun: ' . $year,
            'posts' => $posts,
            'distinctYears' => $distinctYears,
            'distinctCategories' => $distinctCategories,
        ]);
    }

    public function getDistinctYears($posts)
    {
        return $posts->map(function ($post) {
            return $post->created_at->format('Y');
        })->unique();
    }

    public function getDistinctCategories()
    {
        $posts = Post::latest()->get();

        return $posts->map(function ($post) {
            return $post->category->nama;
        })->unique();
    }
}
