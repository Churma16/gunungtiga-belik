<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('nama')->get();

        foreach ($categories as $category) {
            $category->jumlah = Post::where('category_id', $category->id)->count();
        }

        return view('admin.categories.index', [
            'title' => 'Kategori',
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Category::where('nama', $request['nama'])->exists()) {
            session()->flash('failed', 'Kategori '.$request['nama'].' Gagal Ditambahkan. Nama Kategori Sudah Digunakan.');

            return redirect('/dashboard/categories/');
        }
        $validatedData = $request->validate([
            'nama' => 'required|max:100|unique:categories',
        ]);

        $validatedData['nama'] = ucwords(strtolower($validatedData['nama']));

        Category::create($validatedData);
        session()->flash('success', 'Kategori '.$validatedData['nama'].' Berhasil Ditambahkan');

        return redirect('/dashboard/categories');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->latest()->get();

        foreach ($posts as $post) {
            $post->konten = strip_tags($post->konten);

            $post->post_date = $post->created_at->format('d F Y');
        }

        return view('admin.posts.index', [
            'title'=> 'Postingan Kategori '.$category->nama,
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if (Category::where('nama', $request['nama'])->exists()) {
            session()->flash('failed', 'Kategori '.$category->nama.' Gagal Diubah Menjadi '.$request['nama'].'. Nama Kategori Sudah Digunakan.');

            return redirect('categories/');
        }

        $validatedData = $request->validate([
            'nama' => 'required|max:100|unique:categories',
        ]);

        $validatedData['nama'] = ucwords(strtolower($validatedData['nama']));

        Category::where('id', $category->id)->update($validatedData);
        session()->flash('success', 'Kategori '.$validatedData['nama'].' Berhasil Diubah');

        return redirect('/dashboard/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (Post::where('category_id', $category->id)->exists()) {
            session()->flash('failed', 'Kategori '.$category->nama.' Gagal Dihapus. Kategori Masih Digunakan Pada Beberapa Postingan.');

            return redirect('/dashboard/categories/');
        }
        Category::destroy($category->id);
        session()->flash('success', 'Kategori '.$category->nama.' Berhasil Dihapus');

        return redirect('/dashboard/categories/');
    }
}
