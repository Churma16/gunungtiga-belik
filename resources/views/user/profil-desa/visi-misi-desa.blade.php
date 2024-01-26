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
                        <h3 class="mb-5 mt-5">VISI & MISI DESA</h3>
                    </div>
                </div>
                <div class="row">
                    <p>Berdasarkan Peraturan Desa Gunungtiga Nomor 2 Tahun 2019 Tentang Rencana Pembangunan Jangkah Menengah
                        Desa (RPJM Desa) Gunungtiga Tahun 2019-2025, maka seluruh rencana program dan kegiatan pembangunan
                        yang akan dilakukan oleh desa secara bertahap dan berkesinambungan harus dapat menghantarkan
                        tercapainya Visi – Misi Desa. Visi – Misi Desa Gunungtiga disamping merupakan Visi-Misi Calon Kepala
                        Desa terpilih, juga diintegrasikan dengan kebutuhan bersama masyarakat desa dimana proses
                        penyusunannya dilakukan secara partisipatif mulai dari tingkat Dusun/RW sampai tingkat Desa. Adapun
                        Visi Desa Gunungtiga adalah sebagai berikut :</p>
                    <h4>Visi</h4>
                    <p>
                        Visi adalah suatu gambaran yang menantang tentang keadaan masa depan yang diinginkan dengan melihat
                        potensi dan kebutuhan desa. Penyusunan Visi Desa Gunungtiga ini dilakukan dengan pendekatan
                        partisipatif, melibatkan pihak-pihak yang berkepentingan di Desa Gunungtiga seperti pemerintah desa,
                        BPD, tokoh masyarakat, tokoh agama, lembaga masyarakat desa dan masyarakat desa pada umumnya.
                        Pertimbangan kondisi eksternal di desa seperti satuan kerja wilayah pembangunan di Kecamatan. Maka
                        berdasarkan pertimbangan di atas Visi Desa Gunungtiga adalah :
                    </p>
                    <blockquote class="blockquote text-center ">
                        <p class="mb-0 fw-bolder">TERWUJUDNYA MASYARAKAT YANG SEHAT, MANDIRI, AGAMIS DAN TAAT HUKUM SERTA
                            TERSELENGGARANYA PEMERINTAHAN DESA YANG BERSIH, TRANSPARAN DAN MENGUTAMAKAN PELAYANAN</p>
                    </blockquote>
                    <h4>Misi</h4>
                    <p>
                        Misi adalah langkah-langkah yang akan dilakukan guna mewujudkan visi. Sehingga guna mewujudkan visi
                        desa Gunungtiga, maka telah ditetapkan misi-misi yang memuat sesuatu pernyataan yang harus
                        dilaksanakan oleh desa agar tercapainya visi desa tersebut. Pernyataan visi kemudian dijabarkan ke
                        dalam misi agar dapat di operasionalkan/ dikerjakan. Sebagaimana penyusunan visi, misipun dalam
                        penyusunannya menggunakan pendekatan partisipatif dan pertimbangan potensi dan kebutuhan Desa
                        Gunungtiga, sebagaimana proses yang dilakukan, maka misi Desa Gunungtiga adalah:
                    <ol>
                        <li>Religius
                            <ul>
                                <li>Terwujudnya masyarakat yang beriman dan bertaqwa sehingga nilai dan norma agama
                                    dilaksanakan dalam perilaku sehari – hari.</li>
                                <li>Menjunjung tinggi budaya dan karakter masyarakat yang agamis, bermoral dan berbudi
                                    luhur.</li>
                                <li>Berkembangnya transparansi dalam budaya dan perilaku.</li>
                                <li>Berkembangnya budaya jujur, sportif, dan menghargai perbedaan.</li>
                            </ul>
                        </li>
                        <li>Aman & Damai
                            <ul>
                                <li>Meningkatkan dan menjamin kepastian pelayanan publik dengan model pelayanan yang efektif
                                    dan efisien</li>
                                <li>Mewujudkan penyelenggaraan pemerintah yang transparan, akuntabel, professional
                                    berlandaskan norma – norma dan supremasi hukum</li>
                                <li>Meningkatkan pemberdayaan dan penguatan kelembagaan di masyarakat melalui keterlibatan
                                    seluruh komponen dalam setiap tahapan pembangunan</li>
                                <li>Meningkatkan dan memelihara stabilitas pemerintahan, politik, ekonomi, sosial, dan
                                    budaya sehingga memberikan keamanan dan rasa aman bagi masyarakat</li>
                            </ul>
                        </li>
                        <li>Sehat & Sejahtera
                            <ul>
                                <li>Meningkatnya kesehatan masyarakat sehingga dapat meningkatkat produktifitasnya</li>
                                <li>Dalam bidang kesehatan, desa Gunungtiga di Tahun 2014 berhasil menduduki peringkat lomba
                                    PHBS Tingkat Provinsi Jawa Tengah.</li>
                                <li>Meningkatnya pendapatan perkapita penduduk sehingga desa Gunungtiga menjadi sejahtera
                                </li>
                                <li>Meningkatnya indeks pengembangan manusia, yang merupakan komposisi tingkat pendidikan,
                                    kesehatan, angka kematian bayi, dan usia harapan hidup.</li>
                                <li>Mewujudkan kepastian pelayanan dasar masyarakat secara optimal yang meliputi pendidikan,
                                    kesehatan, dan Infra struktur pedesaan</li>
                                <li>Meningkatkan pertumbuhan ekonomi dalam rangka pengentasan kemiskinan, membuka lapangan
                                    kerja dalam rangka mewujudkan kesejahteraan masyarakat.</li>
                            </ul>
                        </li>
                        <li>Menjunjung Tinggi Supremasi Hukum
                            <ul>
                                <li>Tegaknya hukum yang berkeadilan tanpa diskriminasi</li>
                                <li>Terwujudnya institusi dan aparat desa yang bersih dan professional</li>
                                <li>Terwujudnya hak asasi manusia</li>
                                <li>Terwujudnya budaya penghargaan dan kepatuhan terhadap hukum</li>
                            </ul>
                        </li>
                        <li>Terselenggaranya Pemerintahan Desa yang bersih, Transparan dan Mengutamakan
                            PelayananMengutamakan dan menjamin kepastian pelayanan publik dengan model pelayanan yang
                            efektif dan efisien.</li>
                    </ol>
                    </p>
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
