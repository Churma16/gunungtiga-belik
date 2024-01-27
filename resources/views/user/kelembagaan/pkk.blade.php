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
                        <h3 class="mb-5 mt-5">Pembina Kesejahteraan Keluarga (PKK)</h3>
                    </div>
                </div>
                <div class="row">
                    <h4>Pengertian PKK</h4>
                    <p>
                        PKK Desa adalah lembaga kemasyarakatan yang dibentuk di tingkat desa sebagai mitra kerja pemerintah
                        desa dan organisasi kemasyarakatan lainnya, yang berfungsi sebagai fasilitator, perencana,
                        pelaksana, pengendali, dan penggerak pada masing-masing jenjang pemerintahan untuk terlaksananya
                        program PKK
                    </p>

                    <h4>Fungsi PKK</h4>
                    <ul>
                        <li>Meningkatkan kesadaran, pengetahuan, dan keterampilan masyarakat dalam upaya meningkatkan
                            kesejahteraan keluarga.</li>
                        <li>Membina dan mengembangkan potensi masyarakat, khususnya keluarga, dalam upaya meningkatkan
                            kesejahteraan keluarga.</li>
                        <li>Meningkatkan peran serta masyarakat dalam pembangunan.</li>
                        <li>Meningkatkan ketahanan keluarga.</li>
                        <li>Membantu pemerintah desa dalam pembangunan keluarga sejahtera, khususnya dalam bidang
                            pendidikan,
                            kesehatan, ekonomi, dan lingkungan hidup.</li>
                        <li>Meningkatkan peran serta masyarakat desa dalam pembangunan keluarga sejahtera.</li>
                        <li>Membina dan mengembangkan potensi masyarakat desa dalam rangka meningkatkan kesejahteraan
                            keluarga.</li>
                        <li>Meningkatkan ketahanan keluarga desa.</li>
                    </ul>
                    <div class="row">
                        <div class="card col-lg-6 col-md-8 col-sm-10 m-auto mb-3">
                            <div class="card-header">Daftar Nama PKK</div>
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
                                            {{-- <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Purna Tugas</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pkks as $pkk)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 ms-2">
                                                        <h6 class="mb-0 text-xs">{{ $loop->iteration }}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">{{ $pkk->nama }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">{{ $pkk->jabatan }}</p>
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
            </div>
        </section>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>
    <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->

    <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
    <!--   Core JS Files   -->
@endsection

</html>
