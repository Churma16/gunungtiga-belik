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
                                        @foreach ($karang_tarunas as $karang_taruna)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <h6 class="mb-0 text-xs">{{ $loop->iteration }}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">{{ $karang_taruna->nama }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">{{ $karang_taruna->jabatan }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">
                                                        {{ $karang_taruna->formatted_purna_tugas }}</p>
                                                </td>
                                            </tr>
                                        @endforeach


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
@endsection

</html>
