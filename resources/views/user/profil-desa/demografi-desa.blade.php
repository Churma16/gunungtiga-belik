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
                        <h3 class="mb-5 mt-5">DEMOGRAFI</h3>
                    </div>
                </div>
                <div class="row">
                    <h4>Letak Astronomi dan Geografis</h4>
                    <p>
                        Desa Gunungtiga terletak secara astronomi antara 1090 17” 30” – 1090 40” 30” Bujur Timur dan 80 52”
                        30” – 70 20” 11” Lintang Selatan. Secara geografis, desa ini berbatasan dengan Desa Mendelem
                        (Utara), Desa Kuta (Timur), Desa Sirandu (Selatan), dan Desa Mendelem-Belik (Barat).
                    </p>

                    <h4>Luas Wilayah dan Pembagian Administratif</h4>
                    <p>
                        Desa Gunungtiga memiliki luas wilayah 3.616,615 Ha, dengan pembagian tanah sawah dan tanah darat.
                        Administratifnya terbagi dalam 2 dusun, 4 RW, dan 12 RT.
                    </p>

                    <h4>Topografi dan Ketinggian</h4>
                    <p>
                        Topografi wilayah Desa Gunungtiga adalah dataran tinggi dengan ketinggian rata-rata 738 meter di
                        atas permukaan air laut. Daerah ini terdiri dari bukit-bukit dengan kemiringan landai dan curam.
                    </p>

                    <h4>Jenis Tanah</h4>
                    <p>
                        Jenis tanah di Desa Gunungtiga meliputi regosol batu-batuan pasir, intermedier, dan latosal (batu
                        bekuan pasir). Sebagian besar lahan dimanfaatkan untuk pertanian dengan luas 301,47 Ha atau 8,36%.
                    </p>

                    <h4>Pemanfaatan Lahan</h4>
                    <p>
                        Mayoritas lahan digunakan untuk pertanian, termasuk tanaman pangan, buah-buahan, dan sayur-sayuran.
                        Sebagian lahan dimiliki oleh Perhutani, sedangkan sisanya digunakan untuk bangunan perumahan, tempat
                        usaha, lembaga pendidikan, dan sosial kemasyarakatan.
                    </p>

                    <h4>Gambaran Umum Demografis</h4>
                    <p>
                        Jumlah penduduk Desa Gunungtiga pada akhir tahun 2019 sejumlah 3.741 jiwa terdiri dari 1.902 jiwa
                        laki-laki dan 1.837 jiwa perempuan. Sedangkan kepadatannya mencapai 1 jiwa/km2. Laju pertumbuhan
                        penduduk Desa Gunungtiga pada tahun 2019 sebesar 0,9 %.

                        Penduduk Desa Gunungtiga dapat dikelompokkan menjadi 4 kelompok usia yaitu :
                    </p>
                    <h4>Komposisi Penduduk Desa</h4>
                    <ol>
                        <li>Komposisi Penduduk Berdasarkan Kelompok Usia
                            <div class="card col-md-6 col-sm-10 m-auto mb-3">
                                <div class="card-header">Jumlah Penduduk Berdasarkan Kelompok Usia.</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Kelompok Usia</th>
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
                                                            <h6 class="mb-0 text-xs">0-5 Tahun</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">289</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">6-20 Tahun</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1.552</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">21-60 Tahun</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1.406</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">60+ Tahun</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">389</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-muted text-xxs">
                                    Sumber : Data Monografi Desa Gunungtiga Tahun 2016
                                </div>
                            </div>
                        </li>
                        <li>Komposisi Penduduk Berdasarkan Jenis Pekerjaan
                            <div class="card col-md-6 col-sm-10 m-auto mb-3">
                                <div class="card-header">Jumlah Penduduk Berdasarkan Jenis Pekerjaan</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th colspan="2"
                                                    class="text-uppercase text-secondary  text-xxs font-weight-bolder opacity-7">
                                                    Jenis Pekerjaan</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Jumlah Jiwa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="4">
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Petani</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pemilik Tanah</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1.859</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Penggarap Lahan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">76</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Penggarap Penyekap</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">-</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Buruh Tani</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">576</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Nelayan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">-</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pengusaha Sedang/Besar</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">-</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pengrajin/Industri Kecil</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">11</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4">
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Buruh</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Industri</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">-</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Bangunan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">138</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pertambangan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">-</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Perkebunan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">38</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pengrajin/Industri Kecil</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">11</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pedagang</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">98</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pengangkutan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">162</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">PNS</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">25</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">TNI/Polri</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Pensiunan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">13</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Jumlah</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">2.997</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-muted text-xxs">
                                    Sumber : Data Monografi Desa Gunungtiga Tahun 2016
                                </div>
                            </div>

                        </li>
                        <li>Komposisi Penduduk Berdasarkan Pendidikan</li>
                        <div class="card col-md-6 col-sm-10 m-auto mb-3">
                            <div class="card-header">Jumlah Penduduk Berdasarkan Jenis Pekerjaan</div>
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary  text-xxs font-weight-bolder opacity-7">
                                                Tingkat Pendidikan</th>
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
                                                        <h6 class="mb-0 text-xs">Belum Sekolah</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">678</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-xs">Tidak Tamat SD</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">466</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-xs">Tamat SD/Sederajat</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">1.362</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-xs">Tamat SLTP/ Sederajat</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">758</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-xs">Tamat SLTA/ Sederajat</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">250</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-xs">Tamat Akademi/Sederajat</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">29</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-xs">Tamat PT/Sederajat</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">34</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-xs">Buta Huruf </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">–</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-xs">Jumlah</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">3.543</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer text-muted text-xxs">
                                Sumber : Data Monografi Desa Gunungtiga Tahun 2016
                            </div>
                        </div>
                        <li>Komposisi Penduduk Berdasarkan Lapangan Usaha
                            <div class="card col-lg-6 col-md-10 col-sm-10 m-auto mb-3">
                                <div class="card-header">Jumlah Penduduk Berdasarkan Lapangan Usaha</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary  text-xxs font-weight-bolder opacity-7">
                                                    Lapangan Usaha</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Jumlah Jiwa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Pertanian, kehutanan, perkebunan dan
                                                                perikanan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">-</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Pertambangan dan Penggalian</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">-</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Industri Pengolahan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">4</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Listrik dan Air Minum</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">2</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Bangunan/Konstruksi</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">138</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Perdagangan Besar, Eceran, Rumah
                                                                makan & Hotel</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">98</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Angkutan, Pergudangan dan Komunikasi
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">62</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Keuangan, Asuransi, Usaha Persewaan
                                                                Bangunan dan Jasa Perusahaan</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">–</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Jasa Sosial Kemasyarakatan dan
                                                                Perorang-an</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">–</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Lainnya (Kegiatan yang belum jelas
                                                                batas-annya)</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0"> 161</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs text-bold">Jumlah</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">465</p>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-muted text-xxs">
                                    Sumber : Data Monografi Desa Gunungtiga Tahun 2016
                                </div>
                            </div>
                        </li>
                    </ol>

                    <h4>KONDISI EKONOMI</h4>
                    <ol>
                        <li>Perkembangan Perekonomian Desa
                            <p>Pertumbuhan ekonomi Desa Gunungtiga dipengaruhi oleh pertumbuhan hasil pertanian, industri
                                kecil atau rumah tangga dan keberadaan pusat perekonomian. Karena kurangnya lapangan
                                pekerjaan yang ada di Desa Gunungtiga menyebabkan banyaknya warga merantau kedaerah lain
                                terutama ke Jakarta, Jawa Barat dan daerah lain. Tercatat ± 15 % warga Desa Gunungtiga yang
                                mencari nafkah di perantauan. Minimnya skill yang dimiliki para perantauan, menyebabkan
                                lapangan pekerjaan yang mereka peroleh di daerah perantauan hanya pada sektor jasa
                                diantaranya jasa transportasi (sopir), perumahan (pembantu), bangunan (tukang), ada
                                sedikit yang bisa diterima dibidang pendidikan hampir tidak ada yang masuk diperkantoran .
                                Akibatnya hasil dari para perantauan boleh dibilang hanya bisa untuk mencukupi kebutuhan
                                sehari-hari keluarganya tidak bisa memberi kontribusi lebih kepada perekonomian desa.</p>
                        </li>
                        <li>Pendapatan Perkapita
                            <p>
                                Pendapatan perkapita (pendapatan setiap orang per tahun) merupakan salah satu indikator
                                kondisi perekonomian Desa Gunungtiga. Pendapatan perkapita penduduk Desa Gunungtiga pada
                                tahun 2016 sebesar Rp 18.000.000,00 (delapanbelas juta rupiah). Dengan pendapatan perkapita
                                penduduk tersebut berarti rata-rata penduduk Desa Gunungtiga memiliki penghasilan + Rp
                                1.500.000,00 per bulan, artinya lebih rendah dari UMK Kabupaten Pemalang tahun 2016.
                            </p>
                        </li>
                        <li>Potensi Unggulan
                            <p>
                                Desa Gunungtiga memiliki beragam potensi sumberdaya yang bisa dikembangkan, baik yang
                                berasal dari sumberdaya alam maupun sumber daya buatan. Beberapa potensi unggulan dalam
                                rangka
                                mendukung pengembangan Desa Gunungtiga meliputi :
                            </p>
                            <ul>
                                <li>Industri Rumah Tangga
                                    <p>
                                        Desa Gunungtiga memiliki industri rumah tangga pembuatan sapu glagah yang
                                        berkualitas
                                        ekspor. Industri ini terletak di Dukuh Ringin Desa Gunungtiga Kecamatan Belik. Hanya
                                        saja industri ini belum dikelola secara maksimal karena keterbatasan sumber daya
                                        walaupun sebenarnya bahan bakunya banyak terdapat di Desa Gunungtiga. Bukan tidak
                                        mungkin kalau dikelola secara profesional akan menjadi sumber usaha yang sangat
                                        potensial.</p>
                                </li>
                                <li>Industri Kecil Makanan
                                    <p>
                                        Di Desa Gunungtiga memiliki banyak produk industri kecil, diantaranya adalah
                                        rempeyek kacang dan rengginang. rempeyek merupakan salah satu industri rumah tangga
                                        yang keberadaannya paling lama. Jumlah pengusaha ada sekitar 2 orang. Industri ini
                                        terletak di Dusun Krajan Desa Gunungtiga Kecamatan Belik. Rempeyek ini hanya
                                        dipasarkan di pasar sekitar wilayah belik .

                                        Ditahun 2016 juga ada yang mulai merintis makanan ringan berupa keripik singkong,
                                        pisang dan opak. Tapi karena keterbatasan modal usaha ini juga lambat
                                        perkembangannya.usaha ini berada di wilayah RT 11.</p>
                                </li>
                                <li>Peternakan Ayam Potong
                                    <p>
                                        Desa Gunungtiga sebenarnya adalah daerah yang sangat potensial untuk usaha dalam
                                        bidang peternakan ayam potong. Pernah ada 5 lokasi peternakan ayam potong. Tapi
                                        karena kurangnya ketahanan dari para pengusaha dibidang tersebut, saat ini hanya
                                        tinggal 1 pengusaha saja yang masih bertahan. Hal ini disebabkan karena kekurangan
                                        modal dan kurangnya pengetahuan tentang peternakan ayam potong.
                                    </p>
                                </li>
                                <li>Ternak Ayam Kampung
                                    <p>
                                        Hampir 90% warga Gunungtiga memiliki ayam kampung yang jumlahnya bervariasi antara
                                        8-20 ekor setiap rumah. Mereka memanfaatkan hewan peliharaan ini sebagai simpanan
                                        yang bisa dimanfaatkan bila ada kebutuhan yang mendesak, juga dijadikan menu bila
                                        ada acara dalam keluarga.</p>
                                </li>
                                <li>Ternak Kambing
                                    <p>
                                        Hampir 50% warga Gunungtiga memiliki Ternak Kambing yang jumlahnya bervariasi antara
                                        2-10 ekor setiap rumah. Mereka memanfaatkan hewan peliharaan ini juga sebagai
                                        simpanan selain ayam kampung yang bisa dimanfaatkan bila ada kebutuhan yang mendesak
                                        yang jumlahnya agak besar, ternak ini juga dijadikan menu bila ada acara/hajatan
                                        dalam keluarga.
                                    </p>
                                </li>
                                <li>Ternak Sapi
                                    <p>
                                        Desa Gunungtiga adalah merupakan sentra sapi yang sekarang sudah mencapai + 280 ekor
                                        atau 170 KK peternak sapi, adapun jenis sapi penggemukan berlokasi di Dusun Sibulu
                                        Desa, Sibulu Dukuh, Dukuh Mremang, dengan perkiraan hasil yang diperoleh + Rp
                                        1.000.000,00 s/d Rp 2.000.000,00 per ekor.
                                    </p>
                                </li>
                                <li>Pembuatan Batako
                                    <p>
                                        Di Desa Gunungtiga telah memiliki industri pembuatan batako yang dikelola oleh
                                        masyarakat. Jumlah pengusaha ada 4 orang dengan tenaga kerja 12 orang. Industri ini
                                        terletak didusun Sibulu Desa dengan jumlah pengusaha 1 orang, Sibulu Dukuhg sejumlah
                                        2 orang, dan Dukuh Ringin 1 orang. Pemasaran produknya disekitar Kecamatan Belik.
                                        Omset yang hasilkan setiap tahun + Rp 75.000.000,00.
                                    </p>
                                </li>
                                <li>Pengolahan Nilam
                                    <p>
                                        Ada 3 lokasi pengolahan minyak nilam yang ada di Desa Gunungtiga, tapi hanya ada 2
                                        yang masih beroperasi saat ini. Sebetulnya minyak nilam juga merupakan salah satu
                                        hasil pertanian yang sangat potensial di Desa Gunungtiga. Hanya pengelolaannya belum
                                        diusahakan dengan maksimal. Perlu adanya pembinaan dari instansi terkait sehingga
                                        bisa menjadi salah satu penopang perekonomian Desa Gunungtiga dimasa yang akan
                                        datang.
                                    </p>
                                </li>
                                <li>Jasa Jahitan
                                    <p>
                                        Di Desa Gunungtiga ada sekitar 30-an tukang jahit yang selama ini berusaha dibidang
                                        jasa jahitan. Konsumen dari jasa ini adalah dari wilayah kecamatan belik bahkan
                                        banyak yang dari wilayah kecamatan watukumpul. Sebetulnya usaha ini sangat potensial
                                        bila dikembangkan secara profesional sehingga bisa menjadi penopang perekonomian
                                        desa.
                                    </p>
                                </li>
                            </ul>
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
