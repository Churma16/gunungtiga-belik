<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\ImageOptimizer\OptimizerChainFactory;

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
            'title' => 'Postingan',
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('nama')->get();

        return view('admin.posts.create', [
            'title' => 'Buat Postingan',
            // 'posts' => $posts
            'categories' => $categories,
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
            'gambar' => 'required|image|max:2048',
            'category_id' => 'required',
            'post_gambar.*' => 'image|max:2048',
        ]);


        $validatedData['judul'] = strtoupper($validatedData['judul']);

        if ($request->file('gambar')) {
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $extention = $file->getClientOriginalExtension();
                $filename = 'gambar-header/' . Str::random(15) . '.' . $extention;
                Storage::makeDirectory('gambar-header/');
                $file->move(public_path('gambar-header/'), $filename);
                // Change for live
                // $file->move(base_path('../public_html/gambar-header/'), $filename);

                $validatedData['gambar'] =  $filename;
            }
        }

        $validatedData['user_id'] = Auth()->user()->id;

        // Create a slug from the 'judul' field
        $baseSlug = Str::slug($validatedData['judul']);

        $count = Post::latest()->count();

        $validatedData['slug'] = $baseSlug . '-' . ($count + 1);

        $post = Post::create($validatedData);

        if ($request->hasFile('post_gambar')) {
            $uploadedFiles = $request->file('post_gambar');

            if (count($uploadedFiles) > 4) {
                return redirect()->back()->withErrors(['post_gambar' => 'Maksimal hanya 4 gambar']);
            }

            foreach ($request->file('post_gambar') as $gambar_satuan) {
                if ($gambar_satuan->isValid() && $gambar_satuan->isFile() && in_array($gambar_satuan->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
                    $file = $gambar_satuan;
                    $extention = $file->getClientOriginalExtension();
                    $filename = 'gambar-post/' . Str::random(15) . '.' . $extention;
                    Storage::makeDirectory('gambar-post/');
                    $file->move(public_path('gambar-post/'), $filename);
                    // change for lice
                    // $file->move(base_path('../public_html/gambar-post/'), $filename);

                    $gambarPath = $filename;

                    PostImage::create([
                        'gambar' => $gambarPath,
                        'post_id' => $post->id,
                    ]);
                }
            }
        }

        session()->flash('success', 'Postingan ' . $validatedData['judul'] . ' Berhasil dibuat');

        // return redirect('/dashboard/posts/'. $validatedData['slug']);
        return redirect('/dashboard/posts/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->post_date = $post->created_at->format('d F Y');

        return view('admin.posts.show', [
            'title' => 'Detail Postingan',
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('nama')->get();

        return view('admin.posts.edit', [
            'title' => 'Edit Postingan',
            'post' => $post,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|max:2048',
            'category_id' => 'required',
            'post_gambar.*' => 'image|max:2048',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = 'gambar-header/' . Str::random(15) . '.' . $extention;
            Storage::makeDirectory('gambar-header/');
            $file->move(public_path('gambar-header/'), $filename);
            // change for live
            // $file->move(base_path('../public_html/gambar-header/'), $filename);
            $old_file_path = $post->gambar;
            if (file_exists($old_file_path)) {
                unlink($old_file_path);
            }
            $validatedData['gambar'] = $filename;
        }

        $baseSlug = Str::slug($validatedData['judul']);
        $count = Post::latest()->count();
        $validatedData['slug'] = $baseSlug . '-' . ($count + 1);

        $post->update($validatedData);

        if ($request->hasFile('post_gambar')) {
            foreach ($request->file('post_gambar') as $gambar_satuan) {
                if ($gambar_satuan->isValid() && $gambar_satuan->isFile() && in_array($gambar_satuan->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
                    $file = $gambar_satuan;
                    $extention = $file->getClientOriginalExtension();
                    $filename = 'gambar-post/' . Str::random(15) . '.' . $extention;
                    Storage::makeDirectory('gambar-post/');
                    $file->move(public_path('gambar-post/'), $filename);
                    //  change for live
                    // $file->move(base_path('../public_html/gambar-post/'), $filename);

                    $gambarPath = $filename;

                    PostImage::create([
                        'gambar' => $gambarPath,
                        'post_id' => $post->id,
                    ]);
                }
            }
        }

        if (!empty($request->gambarDihapus)) {
            foreach ($request->gambarDihapus as $gambarDihapus) {
                $postImage = PostImage::find($gambarDihapus);
                if (file_exists($postImage->gambar)) {
                    unlink($postImage->gambar);
                }
                $postImage->delete();
            }
        }

        session()->flash('success', 'Postingan ' . $validatedData['judul'] . ' Berhasil Diubah');

        return redirect('/dashboard/posts/' . $validatedData['slug']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // dd($post->postImage);
        if ($post->gambar) {
            if (file_exists($post->gambar)) {
                unlink($post->gambar);
            }
        }

        if ($post->postImage) {
            foreach ($post->postImage as $post_image) {
                if (file_exists($post_image->gambar)) {
                    unlink($post_image->gambar);
                    $post_image->delete();
                }
            }
        }
        Post::destroy($post->id);

        session()->flash('success', 'Postingan ' . $post->judul . ' Berhasil Dihapus');

        return redirect('/dashboard/posts');
    }
}
