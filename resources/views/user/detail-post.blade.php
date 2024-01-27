{{-- @dd($post_images); --}}
@extends('user.layouts.main')

@section('styles')
    <style>
        ol li {
            padding-top: 10px;
        }

        p {
            text-align: justify
        }
    </style>
@endsection

@section('content')
    <header>
        <div class="page-header min-height-400" style="background-image: url('/assets/img/senja-belik.png')" loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
        </div>
    </header>
    <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
        <!-- START Testimonials w/ user image & text & info -->
        <!-- END Testimonials w/ user image & text & info -->
        <!-- START Blogs w/ 4 cards w/ image & text & link -->
        <div class="row">
            <section class=" col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mb-5 mt-5">
                            <h3 class="">{{ $post->judul }}</h3>
                            {{-- <div class="d-flex border-top border-bottom py-1" style="gap: 8px">
                                <small><i class="fas fa-clock"></i>
                                    {{ $post->post_date }}</small>
                                <small><i class="fas fa-user"></i> {{ $post->user->name }}</small>
                                <small><i class="fas fa-folder-open"></i>
                                    {{ $post->category->nama }}</small>
                            </div> --}}
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="card mt-4 pb-2 col-md-11">
                            <!-- Card image -->
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                                    class="active"></li>
                                                @foreach ($post_images as $post_image)
                                                    <li data-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="{{ $loop->iteration }}"></li>
                                                @endforeach
                                            </ol>
                                            <div class="carousel-inner border-radius-lg">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{ asset('storage/' . $post->gambar) }}"
                                                        alt="dokumentasi {{ $post->judul }}">
                                                </div>
                                                @foreach ($post_images as $post_image)
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100"
                                                            src="{{ asset('storage/' . $post_image->gambar) }}"
                                                            alt="First slide">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <img class="border-radius-lg w-100" src="/assets/img/peta-gunungtiga.jpg"
                                    alt="Image placeholder"> --}}
                                <!-- List group -->
                            </div>
                            <div class="card-body">
                                <div class="d-flex border-top border-bottom py-1" style="gap: 8px">
                                    <small><i class="fas fa-clock"></i>
                                        <a href="">{{ $post->post_date }}</a></small>
                                    <small><i class="fas fa-user"></i> <a
                                            href="/author/{{ $post->user->name }}">{{ $post->user->name }}</a></small>
                                    <small><i class="fas fa-folder-open"></i>
                                        <a
                                            href="/category/{{ $post->category->nama }}">{{ $post->category->nama }}</a></small>
                                </div>
                                <p class="card-text mb-4">{!! $post->konten !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between mt-5 w-100 ">
                        <div class="card d-flex flex-column col-md-4 col-sm-12 align-items-start p-3">
                            <a href="/detail-post/{{ $previousPost->slug }}">
                                <strong class="">PREVIOUS</strong>
                                <small class="d-block">{{ $previousPost->judul }}</small>
                            </a>
                        </div>
                        <div class="card col-md-4 col-sm-12  p-3">
                            <a class="d-flex flex-column align-items-end" href="/detail-post/{{ $nextPost->slug }}">
                                <strong class="">NEXT</strong>
                                <small class="text-end">{{ $nextPost->judul }}</small>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <sidenav class="px-3 col-md-4">
                <div class="container">
                    <div class="row">
                        <div class="input-group input-group-outline mb-5 mt-5">
                            <label class="form-label">Masukan Judul Berita...</label>
                            <input type="text" class="form-control mb-sm-0">
                        </div>
                        <section class="py-2 px-3 mb-3 rounded position-relative bg-gradient-dark mx-n3">
                            <h5 class="text-white z-index-1 position-relative">Berita Terkini</h5>

                        </section>
                        @foreach ($posts as $post)
                            <a href="/detail-post/{{ $post->slug }}"
                                style="text-decoration: none;"class="text-sm opacity-10 mb-0 border-bottom mb-2 mx-n3"><b>{{ $post->judul }}</b></a>
                        @endforeach
                        <section class="py-2 px-3 mb-3 rounded position-relative bg-gradient-dark mx-n3 mt-3">
                            <h5 class="text-white z-index-1 position-relative">Arsip Per Bulan</h5>
                        </section>
                        @foreach ($uniqueMonthYears as $uniqueMonthYear)
                            @php
                                $monthYear = explode(' ', $uniqueMonthYear);
                            @endphp
                            <b class="text-sm opacity-10 mb-0 border-bottom mb-2 mx-n3"><a
                                    href="/year/{{ $monthYear[1] }}/{{ $monthYear[0] }}">
                                    {{ $uniqueMonthYear }}
                                </a></b>
                        @endforeach
                    </div>
                </div>
            </sidenav>
        </div>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>
    <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->

    <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
    <!--   Core JS Files   -->
@endsection

</html>
