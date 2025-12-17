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
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <h3 class="mb-5 mt-5" id="title">DEMOGRAFI</h3>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="changeLanguange" onclick="toggleLanguage()">
                        <label class="form-check-label" for="changeLanguange">ID/EN</label>
                    </div>
                </div>
                <div class="row" id="bahasaContent">
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
                <div class="row hidden" id="englishContent">
                    <h4>Astronomical and Geographical Locations</h4>
                    <p>
                        Gunungtiga Village is located astronomically between 1090 17” 30” – 1090 40” 30” East Longitude and
                        80 52” 30” – 70 20” 11” South Latitude. Geographically, Gunungtiga village borders Mendelem Village
                        (North), Kuta Village (East), Sirandu Village (South), and Mendelem-Belik Village (West).
                    </p>

                    <h4>Area and Administrative Division</h4>
                    <p>
                        Gunungtiga Village has an area of 3,616,615 Ha, divided into rice fields and land. The
                        administration is divided into 2 hamlets, 4 RWs, and 12 RTs.
                    </p>

                    <h4>Topography and Altitude</h4>
                    <p>
                        The topography of the Gunungtiga Village area is a plateau with an average height of 738 meters
                        above sea level. This area consists of hills with gently sloping hills and steep slopes.
                    </p>

                    <h4>Type of Soils</h4>
                    <p>
                        Type of soils in Gunungtiga Village include sandstone regosol, intermediate, and latosal
                        (sandstone). Most of the land is used for agriculture with an area of 301.47 Ha or 8.36%.
                    </p>

                    <h4>Land Use</h4>
                    <p>
                        The majority of land is used for agriculture, including food crops, fruit, and vegetables. Some of
                        the land is owned by Perhutani, while the rest is used for residential buildings, business premises,
                        educational and social institutions.
                    </p>

                    <h4>Demographic Overview</h4>
                    <p>
                        The population of Gunungtiga Village at the end of 2019 was 3,741 people, consisting of 1,902 men
                        and 1,837 women. Meanwhile, the density reaches 1 person/km2. The population growth rate of
                        Gunungtiga Village in 2019 was 0.9%. The population of Gunungtiga Village can be grouped into 4 age
                        groups, namely:
                    </p>

                    <h4>Economic Conditions</h4>
                    <ol>
                        <li>Population Composition Based on Age Groups
                            <div class="card col-md-6 col-sm-10 m-auto mb-3">
                                <div class="card-header">Population Count Based on Age Groups.</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Age Group</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Number of Individuals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">0-5 Years</h6>
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
                                                            <h6 class="mb-0 text-xs">6-20 Years</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1,552</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">21-60 Years</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1,406</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">60+ Years</h6>
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
                                    Source: Data Monograph of Gunungtiga Village, 2016
                                </div>
                            </div>
                        </li>

                        <li>Population Composition Based on Occupation
                            <div class="card col-md-6 col-sm-10 m-auto mb-3">
                                <div class="card-header">Population Count Based on Occupation</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th colspan="2"
                                                    class="text-uppercase text-secondary  text-xxs font-weight-bolder opacity-7">
                                                    Occupation</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Number of Individuals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="4">
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Farmers</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Land Owners</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1,859</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Land Cultivators</h6>
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
                                                            <h6 class="mb-0 text-xs">Crop Harvester</h6>
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
                                                            <h6 class="mb-0 text-xs">Farm Laborer</h6>
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
                                                            <h6 class="mb-0 text-xs">Fisherman</h6>
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
                                                            <h6 class="mb-0 text-xs">Medium/Large Entrepreneur</h6>
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
                                                            <h6 class="mb-0 text-xs">Craftsman/Small Industry</h6>
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
                                                            <h6 class="mb-0 text-xs ">Laborer</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Industry</h6>
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
                                                            <h6 class="mb-0 text-xs">Construction</h6>
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
                                                            <h6 class="mb-0 text-xs">Mining</h6>
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
                                                            <h6 class="mb-0 text-xs">Plantation</h6>
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
                                                            <h6 class="mb-0 text-xs">Craftsman/Small Industry</h6>
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
                                                            <h6 class="mb-0 text-xs">Trader</h6>
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
                                                            <h6 class="mb-0 text-xs">Transportation</h6>
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
                                                            <h6 class="mb-0 text-xs">Civil Servant (PNS)</h6>
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
                                                            <h6 class="mb-0 text-xs">Military/Police (TNI/Polri)</h6>
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
                                                            <h6 class="mb-0 text-xs">Retiree</h6>
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
                                                            <h6 class="mb-0 text-xs">Total</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">2,997</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-muted text-xxs">
                                    Source: Data Monograph of Gunungtiga Village, 2016
                                </div>
                            </div>
                        </li>

                        <li>Population Composition Based on Education
                            <div class="card col-md-6 col-sm-10 m-auto mb-3">
                                <div class="card-header">Population Count Based on Education Level</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary  text-xxs font-weight-bolder opacity-7">
                                                    Education Level</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Number of Individuals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Not Attended School</h6>
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
                                                            <h6 class="mb-0 text-xs">Incomplete Primary School</h6>
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
                                                            <h6 class="mb-0 text-xs">Completed Primary School or Equivalent
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">1,362</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Completed Junior High School or
                                                                Equivalent</h6>
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
                                                            <h6 class="mb-0 text-xs">Completed Senior High School or
                                                                Equivalent</h6>
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
                                                            <h6 class="mb-0 text-xs">Completed Academy/Equivalent</h6>
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
                                                            <h6 class="mb-0 text-xs">Completed University/Equivalent</h6>
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
                                                            <h6 class="mb-0 text-xs">Illiterate</h6>
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
                                                            <h6 class="mb-0 text-xs">Total</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">3,543</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-muted text-xxs">
                                    Source: Data Monograph of Gunungtiga Village, 2016
                                </div>
                            </div>
                        </li>

                        <li>Population Composition Based on Field of Business
                            <div class="card col-lg-6 col-md-10 col-sm-10 m-auto mb-3">
                                <div class="card-header">Population Based on Field of Business</div>
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary  text-xxs font-weight-bolder opacity-7">
                                                    Field of Business</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Population</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2 ">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs ">Agriculture, Forestry, Plantation,
                                                                and Fisheries</h6>
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
                                                            <h6 class="mb-0 text-xs ">Mining and Excavation</h6>
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
                                                            <h6 class="mb-0 text-xs ">Processing Industry</h6>
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
                                                            <h6 class="mb-0 text-xs ">Electricity and Drinking Water</h6>
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
                                                            <h6 class="mb-0 text-xs ">Building/Construction</h6>
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
                                                            <h6 class="mb-0 text-xs ">Wholesale Trade, Retail Trade,
                                                                Restaurants & Hotels</h6>
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
                                                            <h6 class="mb-0 text-xs ">Transportation, Warehousing, and
                                                                Communication</h6>
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
                                                            <h6 class="mb-0 text-xs ">Finance, Insurance, Rental and
                                                                Business Services</h6>
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
                                                            <h6 class="mb-0 text-xs ">Social Community Services and
                                                                Individuals</h6>
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
                                                            <h6 class="mb-0 text-xs ">Others (Activities with unclear
                                                                boundaries)</h6>
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
                                                            <h6 class="mb-0 text-xs text-bold">Total</h6>
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
                                    Source: Data Monograph of Gunungtiga Village 2016
                                </div>
                            </div>
                        </li>
                    </ol>
                    <ol>
                        <li>
                            <h5>Village Economic Growth</h5>
                            <p>
                                The economic growth of Gunungtiga Village is influenced by the growth of agricultural
                                products, small or household industries, and the existence of an economic center. Due to the
                                lack of job opportunities in Gunungtiga Village, many residents have migrated to other
                                areas, especially to Jakarta, West Java, and other areas. It is recorded that ± 15% of
                                Gunungtiga Village residents earn their living outside the area. The lack of skills
                                possessed by migrants means that the jobs they get in outside areas are only in the service
                                sector, including transportation services (drivers), housing (helpers), construction
                                (handymen), there are few that can be accepted in the field of education, almost no one
                                works in an office. As a result, it can be said that the income from migrants can only meet
                                the daily needs of their families and cannot contribute more to the village economy.
                            </p>
                        </li>

                        <li>
                            <h5>Income per capita</h5>
                            <p>
                                Per capita income (each person's income per year) is an indicator of the economic condition
                                of Gunungtiga Village. The per capita income of the residents of Gunungtiga Village in 2016
                                was IDR 18,000,000.00 (eighteen million rupiah). With the per capita income of the
                                population, this means that the average resident of Gunungtiga Village has an income of +
                                IDR 1,500,000.00 per month, meaning it is lower than the UMK of Pemalang Regency in 2016.
                            </p>
                        </li>

                        <li>
                            <h5>Featured Potential</h5>
                            <p>
                                Gunungtiga Village has a variety of potential resources that can be developed, both from
                                natural resources and man-made resources. Several featured potentials in order to support
                                the development of Gunungtiga Village include:
                            </p>
                            <ul>
                                <li>
                                    <h6>Domestic industry</h6>
                                    <p>
                                        Gunungtiga Village has a home industry making export quality glagah brooms. This
                                        industry is located in Dukuh Ringin, Gunungtiga Village, Belik District. It's just
                                        that this industry has not been managed optimally due to limited resources even
                                        though the raw materials are actually abundant in Gunungtiga Village. It is not
                                        impossible that if managed professionally it will become a source of very potential
                                        business.
                                    </p>
                                </li>

                                <li>
                                    <h6>Snack Industry</h6>
                                    <p>
                                        Gunungtiga Village housed many independent industrial products, including rempeyek
                                        and rengginang. Rempeyek is one of the household industries that have existed for
                                        the longest time. The number of entrepreneurs for this industry is around 2 people.
                                        This industry is located in Krajan Hamlet, Gunungtiga Village, Belik District.
                                        Rempeyek is only marketed in markets around the buying area. In 2016, there were
                                        also those who started pioneering snacks in the form of cassava chips, bananas and
                                        opak. But due to limited budget, the growth for said business remains stagnant. This
                                        business is located in the RT 11 area.
                                    </p>
                                </li>

                                <li>
                                    <h6>Broiler Chicken Farm</h6>
                                    <p>
                                        Gunungtiga Village is an area with great potential for business in the field of
                                        broiler chicken farming. Once, there were 5 broiler chicken farming locations. But
                                        due to the lack of resilience of entrepreneurs in this field, currently only 1
                                        entrepreneur is still surviving. This is due to lack of capital and lack of
                                        knowledge about broiler chicken farming.
                                    </p>
                                </li>

                                <li>
                                    <h6>Free-range Chicken Farming</h6>
                                    <p>
                                        Almost 90% of Gunungtiga residents have free-range chickens, the number of which
                                        varies between 8-20 per house. Free-range chickens are used as savings which can be
                                        used if there was ever an urgent need. It is also used as a meal ingredient for
                                        family events.
                                    </p>
                                </li>

                                <li>
                                    <h6>Goat Farming</h6>
                                    <p>
                                        Nearly 50% of Gunungtiga residents have goats, the number of which varies between
                                        2-10 per house. They also use these pets as savings, apart from free-range chickens
                                        which can be used if there is an urgent need for a rather large number, these
                                        livestock are also used as a menu for events/celebrations in the family.
                                    </p>
                                </li>

                                <li>
                                    <h6>Cattle</h6>
                                    <p>
                                        Gunungtiga Village is a cattle center which has now reached + 280 head or 170
                                        families of cattle breeders. The type of cattle fattening is located in Sibulu
                                        Village Hamlet, Sibulu Dukuh, Dukuh Mremang, with an estimated yield of + IDR
                                        1,000,000.00 to IDR 2,000,000.00 per head.
                                    </p>
                                </li>

                                <li>
                                    <h6>Brick Making</h6>
                                    <p>
                                        Gunungtiga Village already has a brick making industry which is managed by the
                                        community. There are 4 entrepreneurs with a workforce of 12 people. This industry is
                                        located in the Sibulu Village hamlet with 1 entrepreneur, 2 people in Sibulu Dukuhg,
                                        and 1 person in Ringin Dukuh. And product marketing around Belik District. The
                                        turnover generated each year is + IDR 75,000,000.00.
                                    </p>
                                </li>

                                <li>
                                    <h6>Patchouli Processing</h6>
                                    <p>
                                        There are 3 patchouli oil processing locations in Gunungtiga Village, but only 2 are
                                        still operating at this time. Patchouli oil is also one of the agricultural products
                                        that hold great potential in Gunungtiga Village. It's just that management hasn't
                                        been done optimally. There needs to be guidance from related agencies so that it can
                                        become one of the economic pillars of Gunungtiga Village in the future.
                                    </p>
                                </li>

                                <li>
                                    <h6>Stitching Services</h6>
                                    <p>
                                        In Gunungtiga Village there are around 30 tailors who are currently working in the
                                        sewing service sector. Consumers of this service are from the Belik sub-district
                                        area, many even from the Watukumpul sub-district area. In fact, this business has
                                        great potential if developed professionally so that it can support the village
                                        economy.
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

@section('scripts')
<script>
    function toggleLanguage() {
        var bahasaContent = document.getElementById('bahasaContent');
        var englishContent = document.getElementById('englishContent');
        var title = document.getElementById('title');

        bahasaContent.classList.toggle('hidden');
        englishContent.classList.toggle('hidden');
        if (title.innerHTML === "DEMOGRAFI") {
            title.innerHTML = "DEMOGRAPHY";
        } else {
            title.innerHTML = "DEMOGRAFI";
        }
    }
</script>
@endsection
