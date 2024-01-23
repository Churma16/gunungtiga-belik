{{-- @dd((empty($posts))) --}}
@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">
                                Detail Postingan
                            </h6>
                        </div>
                    </div>
                    <div class="d-flex align-self-start mx-3 pt-3" style="gap: 6px ">
                        <a class="btn btn-warning"><i class="fas fa-edit"></i> Edit Postingan</a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0 " onclick="confirmDelete(event)">
                                <i class="fas fa-trash"></i> Hapus Postingan</button>
                        </form>
                    </div>
                    <div class="card mt-4 px-5 pt-3">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2  align-self-center">
                            <div class="col-lg-10 col-md-12 ">
                                <img class="border-radius-lg w-100" src="{{ asset('storage/' . $post->gambar) }}"
                                    alt="Image placeholder" style="max-width: 100%">
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <h4 class="font-weight-normal mt-3">{{ $post->judul }}</h4>
                            <div class="d-flex border-top border-bottom py-1" style="gap: 8px">
                                <small><i class="fas fa-clock"></i>
                                    {{ $post->post_date }}</small>
                                <small><i class="fas fa-user"></i> {{ $post->user->name }}</small>
                                <small><i class="fas fa-folder-open"></i>
                                    {{ $post->category->nama }}</small>
                            </div>
                            <p class="card-text mb-4">{!! $post->konten !!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
@endsection
