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
                        <h3 class="mb-5 mt-5">PEMERINTAH DESA</h3>
                    </div>
                </div>
                <div class="row">
                    <h4>Pengertian Pemerintah Desa</h4>
                    <p>
                        Perangkat desa adalah unsur penyelenggara pemerintahan desa yang terdiri dari kepala desa dan
                        perangkat desa. Perangkat desa dipimpin oleh kepala desa yang dibantu oleh perangkat desa lainnya.
                    </p>
                    <p>
                        Pengertian perangkat desa menurut Undang-Undang Nomor 6 Tahun 2014 tentang Desa adalah unsur
                        penyelenggara pemerintahan desa yang terdiri dari kepala desa dan perangkat desa. Perangkat desa
                        dipimpin oleh kepala desa yang dibantu oleh perangkat desa lainnya.
                    </p>
                    <p>
                        Fungsi perangkat desa adalah membantu kepala desa dalam penyelenggaraan pemerintahan desa,
                        pelaksanaan pembangunan desa, pembinaan kemasyarakatan desa, dan pemberdayaan masyarakat desa.
                    </p>
                    <div class="card col-md-6 col-sm-10 m-auto mb-3">
                        <div class="card-header">Daftar Nama Perangkat Desa Gunungtiga Tahun 2019</div>
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
                                            <p class="text-xs font-weight-normal mb-0">Nahyono</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Kepala Desa</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">9 Januari 2025</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">2.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Ali Mutarki</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Sekretaris Desa</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">11 Agustus 2036</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">3.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Tuti Iswanti</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Kaur Umum</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">15 November 1951</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">4.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Poniman</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Kaur Pembangunan</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">18 November 2030</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">5.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Tri Winarti</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Kaur Keuangan</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">24 Oktober 2040</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">6.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Sutanto</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Kasi Pemerintahan</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">12 Juni 2045</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">7.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Riyanto</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Kasi Pelayanan</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">24 Oktober 2039</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">8.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Arisno</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Kaur Keuangan</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">24 Oktober 2040</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">9.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Nur Anisyah</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Kepala Dusun I</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">30 Maret 2055</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 ms-2">
                                                <h6 class="mb-0 text-xs">10.</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Eka Nur Hasyim</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">Kepala Dusun II</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-normal mb-0">16 Maret 2039</p>
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
@endsection

</html>
