<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
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
            'gambar' => 'required|image',
            'category_id' => 'required'
        ]);

        $validatedData['judul'] = strtoupper($validatedData['judul']);

        if ($request->file('gambar')) {
            // Get the path to the stored image
            $imagePath = $request->file('gambar')->store('gambar-header');

            // Full path to the stored image
            $fullImagePath = storage_path('app/public/' . $imagePath);

            // Optimize the image to a maximum file size (1 MB in this example)
            $maxFileSize = 1024; // in kilobytes (1 MB)
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($fullImagePath, null, $maxFileSize);

            $validatedData['gambar'] = $imagePath;
        }


        $validatedData['user_id'] = Auth()->user()->id;

        // Create a slug from the 'judul' field
        $baseSlug = Str::slug($validatedData['judul']);

        $count = Post::latest()->count();

        $validatedData['slug'] = $baseSlug . '-' . ($count + 1);

        $post=Post::create($validatedData);

        if ($request->hasFile('post_gambar')) {
            $uploadedFiles = $request->file('post_gambar');

            if (count($uploadedFiles) > 4) {
                return redirect()->back()->withErrors(['post_gambar' => 'Maksimal hanya 4 gambar']);
            }

            foreach ($request->file('post_gambar') as $gambar_satuan) {
                if ($gambar_satuan->isValid() && $gambar_satuan->isFile() && in_array($gambar_satuan->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
                    $gambarPath = $gambar_satuan->store('gambar-post');

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
            'gambar' => 'image',
            'category_id' => 'required'
        ]);


        if ($request->file('gambar')) {
            //jika ada gambar baru ganti gambar lama, maka hapus gambar lama dulu
            if ($request->gambar) {
                Storage::delete($post->gambar);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-header');
        }


        $baseSlug = Str::slug($validatedData['judul']);
        $count = Post::latest()->count();
        $validatedData['slug'] = $baseSlug . '-' . ($count + 1);


        $post->update($validatedData);


        if($request->hasFile('post_gambar')){
            foreach($request->file('post_gambar') as $gambar_satuan){
                if($gambar_satuan->isValid() && $gambar_satuan->isFile() && in_array($gambar_satuan->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])){
                    $gambarPath = $gambar_satuan->store('gambar-post');

                    PostImage::create([
                        'gambar' => $gambarPath,
                        'post_id' => $post->id,
                    ]);
                }
            }
        }


        if(!empty($request->gambarDihapus)){
            foreach($request->gambarDihapus as $gambarDihapus){
                $postImage = PostImage::find($gambarDihapus);
                Storage::delete($postImage->gambar);
                $postImage->delete();
            }
        }

        session()->flash('success', 'Postingan ' . $validatedData['judul'] . ' Berhasil Diubah');
        return redirect('/dashboard/posts/'. $validatedData['slug']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->gambar) {
            Storage::delete($post->gambar);
        }

        if ($post->post_images) {
            foreach ($post->post_images as $post_image) {
                Storage::delete($post_image->gambar);
            }
        }
        Post::destroy($post->id);


        session()->flash('success', 'Postingan ' . $post->judul . ' Berhasil Dihapus');
        return redirect('/dashboard/posts');
    }
}
