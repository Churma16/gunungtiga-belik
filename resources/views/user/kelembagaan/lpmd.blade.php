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
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="mb-5 mt-5">Lembaga Pemberdayaan Masyarakat Desa (LPMD)</h3>
                    </div>
                </div>
                <div class="row">
                    <h4>Pengertian LPMD</h4>
                    <p>
                        Lembaga Pemberdayaan Masyarakat Desa atau Kelurahan (LPMD/LPMK)/Lembaga Ketahanan Masyarakat Desa
                        atau Kelurahan (LKMDILKMK) atau sebutan nama lain mempunyai tugas menyusun rencana pembangunan
                        secara partisipatif, menggerakkan swadaya gotong royong masyarakat, melaksanakan dan mengendalikan
                        pembangunan.
                    </p>

                    <h4>Fungsi LPMD</h4>
                    <ul>
                        <li>Penampungan dan penyaluran aspirasi masyarakat dalam pembangunan;</li>
                        <li>Penanaman dan pemupukan rasa persatuan dan kesatuan masyarakat dalam kerangka memperkokoh Negara
                            Kesatuan Republik Indonesia;</li>
                        <li>Peningkatan kualitas dan percepatan pelayanan pemerintah kepada masyarakat;</li>
                        <li>Penyusunan rencana, pelaksanaan, pelestarian dan pengembangan hasil-hasil pembangunan secara
                            partisipatif;</li>
                        <li>Penumbuhkembangan dan penggerak prakarsa, partisipasi, serta swadaya gotong royong masyarakat;
                            dan</li>
                        <li>Penggali, pendayagunaan dan pengembangan potensi sumber daya alam serta keserasian lingkungan
                            hidup.</li>
                    </ul>
                    <div class="card col-lg-6 col-md-8 col-sm-10 m-auto mb-3">
                        <div class="card-header">Daftar Nama Anggota Badan Permusyawaratan Desa Gunungtiga Tahun 2019</div>
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No.
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nama</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Jabatan</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Purna Tugas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">1.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Imam Sidik M</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Ketua</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">28 Desember 2018</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">2.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Sahlan</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Wakil Ketua</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">28 Desember 2018</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">3.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Nuruh Wahdah</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Bendahara</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">28 Desember 2018</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">4.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Wahiti</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Sekretaris</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">28 Desember 2018</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">5.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Toyib B</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Anggota</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">28 Desember 2018</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">6.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Mahmudah</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Anggota</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">28 Desember 2018</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">7.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Rihati</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Anggota</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">28 Desember 2018</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="card-footer text-muted text-xxs">
                            Sumber : Data Monografi Desa Gunungtiga Tahun 2016
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>
    <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->

    <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
    <!--   Core JS Files   -->
    <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="/assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
@endsection

</html>
