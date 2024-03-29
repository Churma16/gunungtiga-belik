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
                        atau Kelurahan (LPMDILKMK) atau sebutan nama lain mempunyai tugas menyusun rencana pembangunan
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
                                    @foreach ($lpmds as $lpmd)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 ms-2">
                                                    <h6 class="mb-0 text-xs">{{ $loop->iteration }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">{{ $lpmd->nama }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">{{ $lpmd->jabatan }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-normal mb-0">
                                                    {{ $lpmd->formatted_purna_tugas }}</p>
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
