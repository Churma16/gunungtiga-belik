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
                        <h3 class="mb-5 mt-5">Badan Permusyawaratan Desa (BPD)</h3>
                    </div>
                </div>
                <div class="row">
                    <h4>Pengertian BPD</h4>
                    <p>
                        Badan Permusyawaratan Desa (BPD) merupakan lembaga yang melaksanakan fungsi pemerintahan yang
                        anggotanya merupakan wakil dari penduduk desa berdasarkan keterwakilan wilayah dan ditetapkan secara
                        demokratis.
                    </p>
                    <p>
                        Pengertian BPD menurut Undang-Undang Nomor 6 Tahun 2014 tentang Desa adalah lembaga yang
                        melaksanakan fungsi pemerintahan yang anggotanya merupakan wakil dari penduduk desa berdasarkan
                        keterwakilan wilayah dan ditetapkan secara demokratis.
                    </p>

                    <h4>Fungsi BPD</h4>
                    <ul>
                        <li>Menampung dan menyalurkan aspirasi masyarakat desa.</li>
                        <li>Melakukan pengawasan terhadap penyelenggaraan pemerintahan desa.</li>
                        <li>Memberikan pertimbangan kepada kepala desa dalam penyusunan peraturan desa.</li>
                    </ul>

                    <h4>Tugas BPD</h4>
                    <ul>
                        <li>Mengadakan musyawarah desa.</li>
                        <li>Membahas dan menyepakati rancangan peraturan desa bersama kepala desa.</li>
                        <li>Memberikan persetujuan terhadap rencana kerja pemerintah desa dan anggaran pendapatan dan
                            belanja desa (APBDes).</li>
                        <li>Memberikan persetujuan terhadap pengangkatan dan pemberhentian perangkat desa.</li>
                        <li>Memberikan pertimbangan terhadap pengangkatan dan pemberhentian kepala desa.</li>
                        <li>Melakukan pengawasan terhadap penyelenggaraan pemerintahan desa, pembangunan desa, pembinaan
                            kemasyarakatan, dan pemberdayaan masyarakat.</li>
                    </ul>
                    <div class="card col-md-6 col-sm-10 m-auto mb-3">
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
                                    @foreach ($bpds as $bpd)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">{{ $loop->iteration }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">{{ $bpd->nama }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">{{ $bpd->jabatan }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">{{ $bpd->formatted_purna_tugas }}
                                                </p>
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
