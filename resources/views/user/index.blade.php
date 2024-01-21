{{-- @dd($posts[0]->konten) --}}
@extends('user.layouts.main')

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
                    <div class="col-md-6 col-sm-8 ">
                        <div class="row">
                            <div class="col-8">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Masukan Judul Berita...</label>
                                    <input type="text" class="form-control mb-sm-0">
                                </div>
                            </div>
                            <div class="col-4 ps-0 align-self-end">
                                <button type="button"
                                    class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="input-group input-group-outline">
                            <select class="form-control">
                                <option>Pilih Tahun</option>
                                <option>2022</option>
                                <option>2011</option>
                                <option>2023</option>
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
                        <h3 class="text-white z-index-1 position-relative">Berita Terkini</h3>
                        <p class="text-white opacity-8 mb-0">Berikut merupakan kejadian yang terjadi di gunungtiga akhir
                            akhir ini.</p>
                    </div>
                </div>
                @foreach ($posts as $post)
                    <div class="row mt-5">
                        <div class="col-lg-12 col-12">
                            <div class="card card-profile mt-4">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12  d-flex flex-column justify-content-center">
                                        <a href="/detail-post/">
                                            <div class="p-3 py-auto pe-md-0">
                                                <img class="border-radius-md shadow-lg"
                                                    src="{{ asset('storage/' . $post->gambar) }}" alt="image"
                                                    style="width: 100%;">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-9 col-md-6 col-12 my-auto">
                                        <div class="card-body ps-lg-0">
                                            <a href="/detail-post/{{ $post->slug }}">
                                                <h5 class="mb-0">{{ $post->judul }}</h5>
                                            </a>
                                            <div class="d-flex" style="gap:8px">
                                                <small><i class="fas fa-clock"></i> {{ $post->post_date }}</small>
                                                <small><i class="fas fa-user"></i> {{ $post->user->name }}</small>
                                                <small><i class="fas fa-folder-open"></i>
                                                    {{ $post->category->nama }}</small>
                                            </div>
                                            <p class="mb-0 mt-2">{!! $post->excerpt!!}... <a class="text-bold" href="/detail-post/{{ $post->slug }}">Baca lebih lanjut...</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row mt-4">
                    <div class="col-lg-6 col-12">
                        <div class="card card-profile mt-4 z-index-2">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                    <a href="javascript:;">
                                        <div class="p-3 pe-md-0">
                                            <img class="w-100 border-radius-md shadow-lg"
                                                src="/assets/img/ivana-squares.jpg" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-6 col-12 my-auto">
                                    <div class="card-body ps-lg-0">
                                        <h5 class="mb-0">Ivana Flow</h5>
                                        <h6 class="text-info">Athlete</h6>
                                        <p class="mb-0">Artist is a term applied to a person who engages in an
                                            activity deemed to be an art.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card card-profile mt-lg-4 mt-5 z-index-2">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                    <a href="javascript:;">
                                        <div class="p-3 pe-md-0">
                                            <img class="w-100 border-radius-md shadow-lg" src="/assets/img/ivana-square.jpg"
                                                alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-6 col-12 my-auto">
                                    <div class="card-body ps-lg-0">
                                        <h5 class="mb-0">Marquez Garcia</h5>
                                        <h6 class="text-info">JS Developer</h6>
                                        <p class="mb-0">Artist is a term applied to a person who engages in an
                                            activity deemed to be an art.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-sm-7 py-5 position-relative">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="card card-profile mt-4">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12 mt-n5">
                                    <a href="javascript:;">
                                        <div class="p-3 pe-md-0">
                                            <img class=" border-radius-md shadow-lg" src="/assets/img/senja-belik.png"
                                                style="width: 240px" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-6 col-12 my-auto">
                                    <div class="card-body ps-lg-0">
                                        <h5 class="mb-0">Emma Roberts</h5>
                                        <h6 class="text-info">UI Designer</h6>
                                        <p class="mb-0">Artist is a term applied to a person who engages in an
                                            activity deemed to be an art.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="mt-n8 mt-md-n9 text-center">
                            <img class="avatar avatar-xxl shadow-xl position-relative z-index-2"
                                src="../assets/img/bruce-mars.jpg" alt="bruce" loading="lazy">
                        </div>
                        <div class="row py-5">
                            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="mb-0">Michael Roven</h3>
                                    <div class="d-block">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-auto">
                                        <span class="h6">323</span>
                                        <span>Posts</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="h6">3.5k</span>
                                        <span>Followers</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="h6">260</span>
                                        <span>Following</span>
                                    </div>
                                </div>
                                <p class="text-lg mb-0">
                                    Decisions: If you can’t decide, the answer is no.
                                    If two equally difficult paths, choose the one more
                                    painful in the short term (pain avoidance is creating
                                    an illusion of equality). Choose the path that leaves
                                    you more equanimous. <br><a href="javascript:;" class="text-info icon-move-right">More
                                        about me
                                        <i class="fas fa-arrow-right text-sm ms-1"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Testimonials w/ user image & text & info -->
        <!-- START Blogs w/ 4 cards w/ image & text & link -->
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="mb-5">Check my latest blogposts</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a class="d-block blur-shadow-image">
                                    <img src="../assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65
                                        million</a>
                                </h5>
                                <p>
                                    Finding temporary housing for your dog should be as easy as
                                    renting an Airbnb. That’s the idea behind Rover ...
                                </p>
                                <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                    <i class="fas fa-arrow-right text-xs ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a class="d-block blur-shadow-image">
                                    <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine
                                        learning</a>
                                </h5>
                                <p>
                                    If you’ve ever wanted to train a machine learning model
                                    and integrate it with IFTTT, you now can with ...
                                </p>
                                <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                    <i class="fas fa-arrow-right text-xs ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a class="d-block blur-shadow-image">
                                    <img src="../assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine
                                        learning</a>
                                </h5>
                                <p>
                                    If you’ve ever wanted to train a machine learning model
                                    and integrate it with IFTTT, you now can with ...
                                </p>
                                <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                    <i class="fas fa-arrow-right text-xs ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <div class="card card-blog card-background cursor-pointer">
                            <div class="full-background" style="background-image: url('../assets/img/examples/blog2.jpg')"
                                loading="lazy">
                            </div>
                            <div class="card-body">
                                <div class="content-left text-start my-auto py-4">
                                    <h2 class="card-title text-white">Flexible work hours</h2>
                                    <p class="card-description text-white">Rather than worrying about switching offices
                                        every couple years, you stay in the same place.</p>
                                    <a href="javascript:;" class="text-white text-sm icon-move-right">Read More
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>

    <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->

    <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
@endsection

</html>
