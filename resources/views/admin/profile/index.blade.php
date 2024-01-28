{{-- @dd('test') --}}
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
                                    {{ $title }}
                                </h6>
                            </div>
                        </div>
                        <form method="post" action="/dashboard/profile/update-username">
                            @csrf <div class="card-body px-4 pb-2">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <h5 class="required">Nama</h5>
                                        <div class="input-group input-group-outline ">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Masukan Username..." value="{{ old('name', $user->name) }}"
                                                required>
                                        </div>
                                        @error('name')
                                            <small class="text-danger mb-3">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <h5 class="">Email</h5>
                                        <div class="input-group input-group-outline ">
                                            <input type="text" class="form-control bg-gray-200"
                                                placeholder="Masukan judul postingan..." readonly
                                                value="{{ $user->email }}">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-3" type="submit">Simpan Perubahan
                                </button>
                            </div>
                        </form>
                        <hr class="border-top border-2">
                        <form method="post" action="/change-password">
                            @csrf <div class="card-body px-4 pb-2">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <h5 class="required">Password Baru</h5>
                                        <div class="input-group input-group-outline ">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Masukan Password Baru..." value="" required>
                                        </div>
                                        @error('password')
                                            <small class="text-danger mb-3">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <h5 class="required">Konfirmasi Password</h5>
                                        <div class="input-group input-group-outline ">
                                            <input type="password" class="form-control" name="password_confirmation"
                                                placeholder="Masukan Kembali Password Baru..." value="" required>
                                        </div>
                                        @error('password_confirmation')
                                            <small class="text-danger mb-3">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/compressorjs/1.0.7/compressor.min.js"></script>
@endsection
