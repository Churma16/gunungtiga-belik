{{-- @dd($posts->count()) --}}
@extends('user.layouts.main')

@section('styles')
    <style>
        li .page-item .active {
            background-color: #1d1d1d !important;
            border-color: #1d1d1d !important;
        }

        .justify {
            text-align: justify;
        }
    </style>

@endsection

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('/assets/img/senja-belik.png');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">DESA GUNUNGTIGA</h1>
                        <p class="lead mb-4 text-white opacity-8">KECAMATAN BELIK KABUPATEN PEMALANG</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
        <section class="my-5">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-sm-12 ">
                        <form action="/" method="GET">
                            <div class="row">
                                <div class="col-8 col-sm-8">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Masukan Judul Berita...</label>
                                        <input type="text" class="form-control mb-sm-0" name="search">
                                    </div>
                                </div>
                                <div class="col-4 ps-0 align-self-end">
                                    <button type="submit"
                                        class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-12 d-flex mt-sm-2" style="gap:12px">
                        <div class="input-group input-group-outline">
                            <select class="form-control" id="categoryDropdown">
                                <option>Pilih Kategori</option>
                                @foreach ($distinctCategories as $distinctCategory)
                                    <option value="{{ $distinctCategory }}">{{ $distinctCategory }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group input-group-outline">
                            <select class="form-control" id="yearDropdown">
                                <option>Pilih Tahun</option>
                                @foreach ($distinctYears as $distinctYear)
                                    <option value="{{ $distinctYear }}">{{ $distinctYear }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- START Testimonials w/ user image & text & info -->
        <section class="pb-5 position-relative bg-gradient-dark mx-n3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-start mb-2 mt-5">
                        <h3 class="text-white z-index-1 position-relative">{{ $title }}</h3>
                        <p class="text-white opacity-8 mb-0">Berikut merupakan kejadian yang terjadi di gunungtiga akhir
                            akhir ini.</p>
                    </div>
                </div>
                @if ($posts->count() == 0)
                    <div class="row mt-5">
                        <div class="col-lg-12 col-12">
                            <div class="card card-profile mt-4 ">
                                <div class="card-header text-center fw-bold">
                                    <h4>Tidak ditemukan Postingan</h4>
                                </div>
                                <div class="card-footer d-flex justify-content-center"><small>Gunakan kata kunci
                                        lain.</small></div>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($posts as $post)
                        <div class="row mt-5">
                            <div class="col-lg-12 col-12">
                                <div class="card card-profile mt-4">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12  d-flex flex-column justify-content-center">
                                            <a href="/detail-post/{{ $post->slug }}">
                                                <div class="p-3 py-auto pe-md-0">
                                                    <img class="border-radius-md shadow-lg" src="{{ asset($post->gambar) }}"
                                                        alt="image" style="width: 100%;">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-6 col-12 my-auto">
                                            <div class="card-body ps-lg-0">
                                                <a href="/detail-post/{{ $post->slug }}">
                                                    <h5 class="mb-0">{{ $post->judul }}</h5>
                                                </a>
                                                <div class="d-flex flex-wrap" style="gap:8px">
                                                    <small class=""><i class="fas fa-clock"></i> {{ $post->post_format_date }}</small>
                                                    <small class=""><i class="fas fa-user"></i> <a href="/author/{{ $post->user->name }}">{{ $post->user->name }}</a></small>
                                                    <small class=""><i class="fas fa-folder-open"></i> <a href="/category/{{ $post->category->nama }}">{{ $post->category->nama }}</a></small>
                                                </div>

                                                <p class="mb-0 mt-2 justify">
                                                    <span class="mobile-excerpt"
                                                        data-excerpt="{!! $post->post_excerpt !!}"></span>
                                                    <a class="text-bold" href="/detail-post/{{ $post->slug }}">Baca lebih
                                                        lanjut...</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </section>
        <div class="d-flex justify-content-center mt-2">
            {{ $posts->links() }}
        </div>
        <!-- START Blogs w/ 4 cards w/ image & text & link -->
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>

    <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->

    <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
@endsection

@section('scripts')
    <script>
        document.getElementById('yearDropdown').addEventListener('change', function() {
            var selectedYear = this.value;
            if (selectedYear !== "Pilih Tahun") {
                window.location.href = "/year/" + selectedYear;
            }
        });
        document.getElementById('categoryDropdown').addEventListener('change', function() {
            var selectedCategory = this.value;
            if (selectedCategory !== "Pilih Kategori") {
                window.location.href = "/category/" + selectedCategory;
            }
        });
    </script>
    <script>
        function setExcerptLength() {
            var excerptElements = document.querySelectorAll('.mobile-excerpt');

            excerptElements.forEach(function(element) {
                var excerptLength = window.innerWidth < 768 ? 50 :
                    100; // Adjust the breakpoint and lengths as needed
                var excerpt = element.getAttribute('data-excerpt').split(' ').slice(0, excerptLength).join(' ');

                element.innerHTML = excerpt + '...';
            });
        }

        window.addEventListener('resize', setExcerptLength);
        window.addEventListener('load', setExcerptLength);
    </script>
@endsection
