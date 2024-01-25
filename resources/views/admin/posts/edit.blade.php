{{-- @dd($post->postImage) --}}
@extends('admin.layouts.main')

@section('styles')
    <style>
        .required::after {
            content: " *";
            color: red;
        }
    </style>
@endsection

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">
                                    Edit Postingan
                                </h6>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" method="post" action="/dashboard/posts/{{ $post->slug }}">
                            @method('put')
                            @csrf
                            <div class="card-body px-4 pb-2">
                                <div class="row">
                                    <div class="col-md-10 col-lg-12">
                                        <h5 class="required">Judul Postingan</h5>
                                        <div class="input-group input-group-outline my-3">
                                            <input type="text" class="form-control" name="judul"
                                                value="{{ old('judul', $post->judul) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-10 col-lg-12">
                                        <h5 class="required">Kategori</h5>
                                        <div class="input-group input-group-outline my-3">
                                            <select class="form-control" name="category_id" required>
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($categories as $category)
                                                    @if (old('category_id', $post->category_id) == $category->id)
                                                        <option value="{{ $category->id }}" selected>{{ $category->nama }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-10 col-lg-3">
                                        <h5 class="required">Gambar Header</h5>
                                        <img id="image_preview" class="mx-auto mt-2"
                                            src="{{ asset('storage/' . $post->gambar) }}" alt="Preview Image"
                                            style=" max-width: 100%; border-radius: 8px">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label"></label>
                                            <input type="file" class="form-control" name="gambar" id="gambar_header"
                                                onchange="previewImage()">
                                        </div>
                                    </div>
                                    <small class="d-block ms-1 ">*File harus berupa gambar dengan maksimal size
                                        2mb</small>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-10 col-lg-12">
                                        <h5 class="required">Isi Konten</h5>
                                        <input id="konten" value="{{ old('konten', $post->konten) }}" type="hidden"
                                            name="konten" required>
                                        <trix-editor input="konten"></trix-editor>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-10 col-lg-3">
                                        <h5>Tambah Gambar Postingan</h5>
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label"></label>
                                            <input type="file" class="form-control" name="post_gambar[]" multiple>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <h5>Gambar Postingan</h5>
                                    @foreach ($post->postImage as $gambar_satuan)
                                        <div class="col-lg-3 col-md-4 col-sm-4 mt-4">
                                            <div class="card">
                                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                    <a class="d-block blur-shadow-image">
                                                        <img src="{{ asset('storage/' . $gambar_satuan->gambar) }}"
                                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                                    </a>

                                                </div>
                                                <hr class="dark horizontal my-0">
                                                <div class="card-body d-flex form-check align-self-center" style="gap:8px">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $gambar_satuan->id }}" name="gambarDihapus[]">
                                                    <label class="custom-control-label" for="gambarDihapus">Pilih Untuk
                                                        Menghapus Gambar</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <button class="btn btn-primary mt-3" type="submit">Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        function previewImage() {
            var input = document.getElementById('gambar_header');
            var imagePreview = document.getElementById('image_preview');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Show the image preview
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.src = '';
                imagePreview.style.display = 'none'; // Hide the image preview
            }
        }

        // Attach the previewImage function to the file input change event
        document.getElementById('gambarInput').addEventListener('change', previewImage);
    </script>
@endsection
