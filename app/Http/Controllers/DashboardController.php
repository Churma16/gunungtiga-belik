<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        $totalPostsThisYear = Post::whereYear('created_at', date('Y'))->count();
        $totalUsers = User::count();
        $totalCategories = Category::count();
        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'totalPosts' => $totalPosts,
            'totalPostsThisYear' => $totalPostsThisYear,
            'totalUsers' => $totalUsers,
            'totalCategories' => $totalCategories,
            ]);
    }
}
