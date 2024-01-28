<?php

namespace App\Http\Controllers;

use App\Models\BPD;
use App\Models\Category;
use App\Models\KarangTaruna;
use App\Models\LPMD;
use App\Models\PKK;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\User;
use App\Models\VillageGovernment;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * If a search query is provided, it retrieves posts that have a title containing the search query.
     * Otherwise, it retrieves the latest posts.
     * It also strips HTML tags from the content of each post.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request('search')) {
            $posts = Post::where('judul', 'like', '%'.request('search').'%')->latest()->paginate(10);
            $title = 'Hasil Pencarian: '.request('search');
        } else {
            $posts = Post::latest()->paginate(10);
            $title = 'Berita Terbaru';
        }

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);
        }

        $distinctYears = $this->getDistinctYears();
        $distinctCategories = $this->getDistinctCategories();

        return view('user.index', [
            'title' => $title,
            'posts' => $posts,
            'distinctYears' => $distinctYears,
            'distinctCategories' => $distinctCategories,
        ]);
    }

    /**
     * Display the detail of a post.
     *
     * @return \Illuminate\View\View
     */
    public function detailPost(Post $post)
    {
        $post->post_date = $post->created_at->format('d F Y');
        $posts = Post::latest()->take(6)->get();
        $allPosts = Post::latest()->get('created_at');
        $uniqueMonthYears = $allPosts->map(function ($allPosts) {
            return $allPosts->created_at->format('F Y');
        })->unique();

        $post_images = PostImage::where('post_id', $post->id)->get();

        // Retrieve the previous and next posts
        $previousPost = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $nextPost = Post::where('id', '>', $post->id)->orderBy('id')->first();

        // dd($uniqueMonthYears);
        return view('user.detail-post', [
            'title' => 'Detail Berita',
            'post' => $post,
            'posts' => $posts,
            'uniqueMonthYears' => $uniqueMonthYears,
            'post_images' => $post_images,
            'previousPost' => $previousPost,
            'nextPost' => $nextPost,

        ]);
    }

    /**
     * Display posts by author.
     *
     * @param  string  $author_name
     * @return \Illuminate\View\View
     */
    public function showByAuthor($author_name)
    {
        $user = User::where('name', $author_name)->first();
        $posts = Post::where('user_id', $user->id)->latest()->paginate(10);

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);
        }

        $distinctYears = $this->getDistinctYears($posts);
        $distinctCategories = $this->getDistinctCategories();

        return view('user.index', [
            'title' => 'Berita Berdasarkan Penulis: '.$user->name,
            'posts' => $posts,
            'distinctYears' => $distinctYears,
            'distinctCategories' => $distinctCategories,
        ]);
    }

    /**
     * Display posts by category.
     *
     * @param  string  $category_name
     * @return \Illuminate\View\View
     */
    public function showByCategory($category_name)
    {
        $category = Category::where('nama', $category_name)->first();
        $posts = Post::where('category_id', $category->id)->latest()->paginate(10);

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);
        }

        $distinctYears = $this->getDistinctYears($posts);
        $distinctCategories = $this->getDistinctCategories();

        return view('user.index', [
            'title' => 'Berita Berdasarkan Kategori: '.$category->nama,
            'posts' => $posts,
            'distinctYears' => $distinctYears,
            'distinctCategories' => $distinctCategories,
        ]);
    }

    /**
     * Display the posts created in a specific year.
     *
     * @param  int  $year  The year to filter the posts by.
     * @return \Illuminate\View\View The view displaying the posts.
     */
    public function showByYear($year)
    {
        $posts = Post::whereYear('created_at', $year)->latest()->paginate(10);

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);
        }

        $distinctYears = $this->getDistinctYears($posts);
        $distinctCategories = $this->getDistinctCategories();

        return view('user.index', [
            'title' => 'Berita Tahun: '.$year,
            'posts' => $posts,
            'distinctYears' => $distinctYears,
            'distinctCategories' => $distinctCategories,
        ]);
    }

    /**
     * Display the posts for a specific month and year.
     *
     * @param  int  $year
     * @param  string  $month
     * @return \Illuminate\View\View
     */
    public function showByMonth($year, $month)
    {
        $numericMonth = Carbon::parse($month)->format('m');

        $posts = Post::whereYear('created_at', $year)->whereMonth('created_at', $numericMonth)->latest()->paginate(10);

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);
        }

        $distinctYears = $this->getDistinctYears($posts);
        $distinctCategories = $this->getDistinctCategories();

        return view('user.index', [
            'title' => 'Berita Bulan: '.$month.' '.$year,
            'posts' => $posts,
            'distinctYears' => $distinctYears,
            'distinctCategories' => $distinctCategories,
        ]);
    }

    /**
     * Get distinct years from the posts.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getDistinctYears()
    {
        $posts = Post::latest()->get();

        return $posts->map(function ($post) {
            return $post->created_at->format('Y');
        })->unique();
    }

    /**
     * Get distinct categories from the posts.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getDistinctCategories()
    {
        $posts = Post::latest()->get();

        return $posts->map(function ($post) {
            return $post->category->nama;
        })->unique();
    }

    /**
     * Display the village government page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showVillageGovernment()
    {
        $village_governments = VillageGovernment::orderBy('order')->get();

        return view('user.kelembagaan.pemerintah-desa', [
            'title' => 'Pemerintah Desa',
            'village_governments' => $village_governments,
        ]);
    }

    /**
     * Display the BPD page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showBPD()
    {
        $bpds = BPD::orderBy('order')->get();

        return view('user.kelembagaan.bpd', [
            'title' => 'BPD',
            'bpds' => $bpds,
        ]);
    }

    /**
     * Display the LPMD page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLPMD()
    {
        $lpmds = LPMD::orderBy('order')->get();

        return view('user.kelembagaan.lpmd', [
            'title' => 'LPMD',
            'lpmds' => $lpmds,
        ]);
    }

    /**
     * Display the PKK page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showPKK()
    {
        $pkks = PKK::orderBy('order')->get();

        return view('user.kelembagaan.pkk', [
            'title' => 'PKK',
            'pkks' => $pkks,
        ]);
    }

    /**
     * Display the Karang Taruna page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showKarangTaruna()
    {
        $karang_tarunas = KarangTaruna::orderBy('order')->get();

        return view('user.kelembagaan.karang-taruna', [
            'title' => 'Karang Taruna',
            'karang_tarunas' => $karang_tarunas,
        ]);
    }
}
