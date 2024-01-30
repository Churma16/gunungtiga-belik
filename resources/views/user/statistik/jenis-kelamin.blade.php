@extends('user.layouts.main')

@section('styles')
    <style>
        ol li {
            padding-top: 10px;
        }

        p {
            text-align: justify;
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
        <section class="py-3">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="mb-5 mt-5">Statistik Jenis Kelamin</h3>
                    </div>
                </div>
                <div class="row">
                    <ol>
                        <li>Jenis Kelamin Total Penduduk
                            <div class="card col-md-6 col-sm-10 m-auto mb-3">
                                <div class="card-header">Jenis Kelamin Total Penduduk.</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Jenis Kelamin</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Jumlah Jiwa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Laki-laki</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1769</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Perempuan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1689</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-muted text-xxs">
                                    Sumber : Sumber BIP 2017
                                </div>
                            </div>
                        </li>
                        <li>Jenis Kelamin Kepala Keluarga
                            <div class="card col-md-6 col-sm-10 m-auto mb-3">
                                <div class="card-header">Jenis Kelamin Kepala Keluarga</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Jenis Kelamin</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Jumlah Jiwa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Laki-laki</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">808</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Perempuan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">236</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-muted text-xxs">
                                    Sumber : Sumber BIP 2017
                                </div>
                            </div>
                        </li>
                        <li>Jenis Kelamin Anggota Keluarga
                            <div class="card col-md-6 col-sm-10 m-auto mb-3">
                                <div class="card-header">Jenis Kelamin Anggota Keluarga</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Jenis Kelamin</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Jumlah Jiwa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Laki-laki</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">961</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Perempuan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1453</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-muted text-xxs">
                                    Sumber : Sumber BIP 2017
                                </div>
                            </div>
                        </li>

                    </ol>

                </div>
            </div>
        </section>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>

    <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->

    <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
    <!--   Core JS Files   -->
@endsection

</html>
