<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostImage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);

            $post->post_date = $post->created_at->format('d F Y');
        }

        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create', [
            // 'posts' => $posts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'required|image',
            'category_id' => 'required'
        ]);

        $validatedData['judul'] = strtoupper($validatedData['judul']);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-header');
        }

        $validatedData['user_id'] = Auth()->user()->id;

        // Create a slug from the 'judul' field
        $baseSlug = Str::slug($validatedData['judul']);

        $count = Post::latest()->count();

        $validatedData['slug'] = $baseSlug . '-' . ($count + 1);

        $post = Post::create($validatedData);

        if ($request->hasFile('post_gambar')) {
            foreach ($request->file('post_gambar') as $gambar_satuan) {
                if ($gambar_satuan->isValid() && $gambar_satuan->isFile() && $gambar_satuan->isImage()) {
                    $gambarPath = $gambar_satuan->store('gambar-post');

                    PostImage::create([
                        'gambar' => $gambarPath,
                        'post_id' => $post->id,
                    ]);
                }
            }
        }

        return redirect('/dashboard/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->post_date = $post->created_at->format('d F Y');


        return view('admin.posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        session()->flash('success', 'Postingan ' . $post->judul . ' Berhasil Dihapus');
        return redirect('/dashboard/posts');
    }
}
