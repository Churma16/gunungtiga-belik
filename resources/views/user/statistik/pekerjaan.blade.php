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
                        <h3 class="mb-5 mt-5">Statistik Pekerjaan</h3>
                    </div>
                </div>
                <div class="row">
                    <ol>
                        <li>Jenis Pekerjaan
                            <div class="card col-md-6 col-sm-10 m-auto mb-3">
                                <div class="card-header">Jenis Pekerjaan</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Jenis Pekerjaan</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Belum/Tidak Bekerja</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1115</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Mengurus Rumah Tangga</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">757</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pelajar/Mahasiswa</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">355</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pensiunan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">4</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pegawai Negeri Sipil</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">8</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Tentara Nasional Indonesia</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Perdagangan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">13</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Petani/Pekebun</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">247</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Peternak</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Konstruksi</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">2</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Transportasi</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">3</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Karyawan Swasta</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">81</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Karyawan Honorer</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">6</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Buruh Harian Lepas</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">185</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Buruh Tani/Perkebunan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">168</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Buruh Nelayan/Perikanan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">9</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Buruh Peternakan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Tukang Listrik</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">2</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Tukang Batu</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">8</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Tukang Kayu</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">9</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Tukang Jahit</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">4</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Penata Rambut</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Tukang Gigi</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Ustadz/Mubaligh</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">2</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Guru</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">17</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Bidan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pelaut</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Sopir</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">97</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pedagang</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">58</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Perangkat Desa</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">15</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Kepala Desa</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">2</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Wiraswasta</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">284</p>
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
