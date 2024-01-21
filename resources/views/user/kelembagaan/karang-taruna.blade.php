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
                        <h3 class="mb-5 mt-5">Karang Taruna</h3>
                    </div>
                </div>
                <div class="row">
                    <h4>Pengertian Karang Taruna</h4>
                    <p>
                        Karang taruna ialah organisasi sosial kemasyarakatan sebagai wadah dan sarana pengembangan setiap
                        anggota masyarakat yang tumbuh dan berkembang atas dasar kesadaran dan tanggung jawab sosial dari,
                        oleh, dan untuk masyarakat, terutama generasi muda, di wilayah desa/kelurahan yang bergerak di
                        bidang usaha kesejahteraan. Anggota karang taruna terdiri atas pemuda dan pemudi yang berusia 11
                        sampai dengan 45 tahun. Pengurus karang taruna yang berusia 17 hingga 35 tahun. Karang taruna
                        memiliki berbagai kegiatan untuk mengembangkan kemampuan mereka. Sebagai wadah pengembangan generasi
                        muda, karang taruna merupakan tempat berbagai upaya atau kegiatan untuk meningkatkan dan
                        mengembangkan cipta, rasa, karsa, dan karya generasi muda dalam rangka pengembangan sumber daya
                        manusia (SDM)
                    </p>

                    <h4>Fungsi Karang Taruna</h4>
                    <p>Karang Taruna memiliki tugas sesuai Peraturan Menteri Sosial Nomor 25 Tahun 2019, yaitu:</p>
                    <ul>
                        <ul>
                            <li>Mengembangkan potensi generasi muda dan masyarakat;</li>
                            <li>Berperan aktif dalam pencegahan dan penanggulangan permasalahan sosial melalui rehabilitasi
                                sosial, jaminan sosial, pemberdayaan sosial, dan perlindungan sosial serta program prioritas
                                nasional.</li>
                        </ul>
                        <div class="card col-md-10 col-sm-10 m-auto mb-3 mt-3">
                            <div class="card-header">Daftar Pengurus Karang Taruna Desa Gunungtiga Tahun 2016
                            </div>
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
                                                <p class="text-xs font-weight-normal mb-0">Kamso</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Ketua</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">2.</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Sutanto</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Sekretaris</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">3.</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Ida Ayu Nurul F</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Bendahara 1</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">4.</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Siti Nur Janah</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Bendahara 2</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">5.</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Roni</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Koordinator Bidang Lingkungan
                                                    Hidup</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">6.</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Oki Nugroho Satrio</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Koordinator Bidang Olahraga</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">7.</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Siti Muinah</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Koordinator Bidang Kesejahteraan
                                                    Sosial</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">8.</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Slamet Septianto</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Koordinator Bidang Pendidikan dan
                                                    Pelatihan, Bidang Humas</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">9.</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Riyanto</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Koordinator Bidang Kerohanian</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">10.</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">TOYIB</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Koordinator Bidang Kewira usahaan
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">1.</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">AHYAT SUPRIYADI</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">Koordinator Bidang Jurnalis</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1 Agustus 2019</p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="card-footer text-muted text-xxs">
                            Sumber : Data Monografi Desa Gunungtiga Tahun 2016
                        </div> --}}
                        </div>
                    </ul>
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
