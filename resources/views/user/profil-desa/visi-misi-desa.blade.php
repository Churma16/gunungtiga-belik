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
            <div class="container" id="">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <h3 class="mb-5 mt-5" id="title">VISI MISI DESA</h3>
                    </div>
                    <div class="form-check form-switch">
                        <label class="form-check-label" for="changeLanguange">ID/EN</label>
                        <input class="form-check-input" type="checkbox" onclick="toggleLanguage()">
                    </div>
                </div>
                <div class="row" id="bahasaContent">
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
                <div class="row hidden" id="englishContent">
                    <p>According to Gunungtiga Village Regulation Number 2 of 2019 concerning the Gunungtiga Village
                        Medium-Term Development Planning (RPJM Desa) 2019-2025, all development program plans and
                        activities to be carried out by the village in stages and continuously must be able to lead to
                        the achievement of the Village Vision - Mission. The Vision - Mission of Gunungtiga Village,
                        besides being the Vision - Mission of the elected Village Head Candidate, is also integrated
                        with the common needs of the village community where the preparation process is carried out in a
                        participatory manner starting from the Hamlet / RW level to the Village level.</p>

                    <h4>Vision</h4>
                    <p>A vision is a demanding picture of the desired future state by considering the potential and
                        needs of the village. The formation of the Gunungtiga Village Vision was carried out using a
                        participatory approach, involving interested parties in Gunungtiga Village such as the village
                        government, Village council (BPD), community leaders, religious leaders, village community
                        institutions and the village community in general. Consideration of external conditions in the
                        village such as development area work units in the Sub-district. Based on the considerations
                        above, the vision of Gunungtiga Village is:</p>

                    <blockquote class="blockquote text-center">
                        <p class="mb-0 fw-bolder">THE ACTUALIZATION OF A HEALTHY, INDEPENDENT, RELIGIOUS AND LAW-ABIDING
                            COMMUNITY AND THE IMPLEMENTATION OF A CLEAN, TRANSPARENT AND SERVICE-ORIENTED VILLAGE
                            GOVERNMENT.</p>
                    </blockquote>

                    <h4>Mission</h4>
                    <p>Missions are steps that will be taken to realize the vision. In order to realize the vision of
                        Gunungtiga Village, missions include a statement that must be carried out by the village in
                        order to achieve the village's vision. The vision statement is then elaborated into missions in
                        order to be operationalized. As with the drafting of the vision, the mission in its preparation
                        uses a participatory approach and considers the potential and needs of Gunungtiga Village, as
                        the process is carried out, the mission of Gunungtiga Village is:</p>

                    <ol>
                        <li><strong>Religious</strong>
                            <ul>
                                <li>The materialization of a community based on faith and devotion, where religious
                                    values and norms are implemented in daily behavior.</li>
                                <li>Upholding the culture and character of a religious, moral and virtuous society.</li>
                                <li>The development of transparency in culture and behavior.</li>
                                <li>The development of a culture of honesty, sportsmanship, and respect for differences.
                                </li>
                            </ul>
                        </li>

                        <li><strong>Safe and Peaceful</strong>
                            <ul>
                                <li>Improving and ensuring the certainty of public services with an effective and
                                    efficient service model.</li>
                                <li>Realizing transparent, accountable, professional government administration based on
                                    norms and the rule of law.</li>
                                <li>Increase empowerment and institutional strengthening in the community through the
                                    involvement of all components in every stage of development.</li>
                                <li>Improving and maintaining government, political, economic, social and cultural
                                    stability so as to provide security and a sense of security for the community.</li>
                            </ul>
                        </li>

                        <li><strong>Healthy and Prosperous</strong>
                            <ul>
                                <li>Improved public health so as to increase productivity.</li>
                                <li>In the health sector, Gunungtiga village in 2014 successfully ranked the PHBS
                                    competition at the Central Java Province level.</li>
                                <li>Increased per capita income of the population so that Gunungtiga village becomes
                                    prosperous.</li>
                                <li>Increasing the human development index, which is a composition of education, health,
                                    infant mortality, and life expectancy.</li>
                                <li>Realizing the certainty of optimal basic community services which include education,
                                    health, and rural infrastructure.</li>
                                <li>Increase economic growth in order to alleviate poverty, open up employment
                                    opportunities in order to realize community welfare.</li>
                            </ul>
                        </li>

                        <li><strong>Uphold the Law Supremacy</strong>
                            <ul>
                                <li>Upholding the law with no discrimination.</li>
                                <li>The creation of clean and professional village institutions and officials.</li>
                                <li>Realization of human rights.</li>
                                <li>The realization of a culture of respect and compliance with the law.</li>
                            </ul>
                        </li>

                        <li><strong>Implementation of a Clean, Transparent, and Service-Prioritizing Village
                                Administration</strong>
                        </li>
                    </ol>
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
            if (title.innerHTML === "VISI MISI DESA") {
                title.innerHTML = "VILLAGE VISION AND MISSION";
            } else {
                title.innerHTML = "VISI MISI DESA";
            }
        }
    </script>
@endsection
