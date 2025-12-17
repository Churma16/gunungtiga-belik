{{-- @dd('test') --}}
@if ($errors->any())
    {{-- @dd($errors); --}}
    {{-- @foreach ($errors->all() as $error)
        @dd($error);
    @endforeach --}}
@endif

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
                                    Buat Postingan
                                </h6>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" method="post" action="/dashboard/posts">
                            @csrf <div class="card-body px-4 pb-2">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <h5 class="required">Judul Postingan</h5>
                                        <div class="input-group input-group-outline ">
                                            <input type="text" class="form-control" name="judul"
                                                placeholder="Masukan judul postingan..." value="{{ old('judul') }}">
                                        </div>
                                        @error('judul')
                                            <small class="text-danger mb-3">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 col-lg-12">
                                        <h5 class="required">Kategori</h5>
                                        <div class="input-group input-group-outline ">
                                            <select class="form-control" name="category_id" required>
                                                <option class="opacity-5" value="">Pilih Kategori</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                        {{ $category->nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <small class="text-danger mb-3">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 col-lg-3">
                                        <h5 class="required">Gambar Header</h5>
                                        <img id="image_preview" class="mx-auto mt-2" src="" alt="Preview Image"
                                            style="max-width: 120%; display: none; border-radius: 8px">
                                        <div class="input-group input-group-outline ">
                                            <label class="form-label"></label>
                                            <input type="file" class="form-control" name="gambar" id="gambar_header"
                                                onchange="compressAndPreviewImage()">
                                        </div>
                                        @error('gambar')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                        <small class="text-info mb-3">
                                            *Ukuran gambar maksimal 2MB
                                        </small>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 col-lg-12">
                                        <h5 class="required">Isi Konten</h5>
                                        <input id="konten" value="{{ old('konten') }}" type="hidden" name="konten"
                                            required>
                                        <trix-editor input="konten"></trix-editor>
                                        @error('konten')
                                            <small class="text-danger mb-3">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 col-lg-3">
                                        <h5>Gambar Postingan</h5>
                                        <div class="input-group input-group-outline ">
                                            <label class="form-label"></label>
                                            <input type="file" class="form-control" name="post_gambar[]" multiple>
                                        </div>
                                        @foreach ($errors->get('post_gambar.*') as $error)
                                            <small class="text-danger">
                                                {{ $error[0] }}
                                            </small>
                                        @endforeach
                                        @error('post_gambar')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <small class="text-info mb-3">
                                        *Maksimal 4 gambar dengan ukuran maksimal 2MB.
                                    </small>
                                </div>

                                <button class="btn btn-primary mt-3" type="submit">Posting
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
        function compressAndPreviewImage() {
            const imageInput = document.getElementById('gambar_header');
            const previewImage = document.getElementById('image_preview');

            const file = imageInput.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
