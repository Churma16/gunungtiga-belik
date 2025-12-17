@extends('user.layouts.main')

@section('styles')
    <style>
        .container ol li {
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
            <div class="container"">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <h3 class="mb-5 mt-5" id="title">SEJARAH DESA</h3>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="changeLanguange" onclick="toggleLanguage()">
                        <label class="form-check-label" for="changeLanguange">ID/EN</label>
                    </div>
                </div>
                <div class="row" id="bahasaContent">
                    <h4>Pengertian Desa</h4>
                    <p>
                        Pengertian Desa sebagaimana diatur dalam
                        Peraturan Pemerintah Nomor 43 Tahun 2014 tentang
                        Peraturan Pelaksanaan Undang-Undang Nomor 6
                        Tahun 2014 tentang Desa adalah desa dan desa
                        adat, selanjutnya disebut desa, adalah kesatuan
                        masyarakat hukum yang memiliki batas wilayah
                        yang berwenang untuk mengatur dan mengurus
                        urusan pemerintahan, kepentingan masyarakat
                        setempat berdasarkan prakarsa masyarakat, hak
                        asal-usul, dan/atau hak tradisional yang diakui
                        dan dihormati dalam sistem pemerintahan Negara
                        Kesatuan Republik Indonesia. Mencermati
                        pengertian desa sebagaimana diatur dalam PP 43
                        Tahun 2014 tentang Desa dimaksud, maka secara
                        yuridis Wilayah Gunungtiga dapat disebut Desa
                        dan secara administratif termasuk wilayah
                        Kecamatan Belik Kabupaten Pemalang.
                    </p>
                    <h4>Nomenklatur Desa Gunungtiga</h4>
                    <p>
                        Penamaan/Nomenklatur Desa Gunungtiga berdasarkan
                        adat istiadat secara turun temurun sejak zaman
                        kerajaan mataram memiliki arti arti
                        <strong>”Pendirian yang kokoh seperti gunung dari
                            tiga tokoh pendiri Desa Gunungtiga yang
                            tidak bisa dipersatukan”</strong>
                        dan dari zaman penjajahan Belanda sampai
                        sekarang nama Gunungtiga tetap dilestarikan.
                        Namun secara formal nama Gunungtiga belum
                        diketahui dibakukan dalam bentuk peraturan
                        perundang-undangan misalnya peraturan daerah,
                        walaupun demikian nama Desa Gunungtiga telah
                        diakui secara administratif sebagai salah satu
                        nama desa dari 211 desa yang ada di Kabupaten
                        Pemalang.
                    </p>

                    <h4>Kondisi Geografis</h4>
                    <ul>
                        <li>Luas Wilayah: 3.616,615 Ha</li>
                        <li>
                            Pembagian Administratif: Dusun Sibulu (2 Rw
                            dan 6 Rt), Dusun Krajan (2 Rw dan 6 Rt),
                            total 4 Rw dan 12 Rt.
                        </li>
                        <li>
                            Topografi: Dataran tinggi dan daerah
                            pegunungan.
                        </li>
                        <li>
                            Jenis Tanah: Alluvial, regosol batu-batuan
                            pasir, tanah letosal (batu bekuan pasir).
                        </li>
                        <li>
                            Pemanfaatan Tanah: 37,81% untuk pertanian
                            dan perkebunan, 18,72% untuk bangunan
                            perumahan, pekarangan, dan tempat usaha.Luas
                            wilayah Desa Gunungtiga 3.616,615 Ha,
                            terdiri dari tanah sawah seluas 1.367,35 Ha
                            dan tanah kering seluas 67,72 Ha.
                        </li>
                        <p></p>
                    </ul>
                    <p>
                        Luas wilayah Desa Gunungtiga 3.616,615 Ha,
                        terdiri dari tanah sawah seluas 1.367,35 Ha dan
                        tanah kering seluas 67,72 Ha. Sementara untuk
                        jenis tanah di wilayah Desa Gunungtiga terdiri
                        dari tanah <em>alluvial</em> yang umumnya
                        terletak di dataran rendah,
                        <em>regosil</em> batu-batuan pasir dan
                        intermedier terdapat di daerah perbukitan. Tanah
                        letosal yang terdiri dari batu bekuan pasir
                        banyak terdapat di daerah bukit sampai
                        pegunungan. Pemanfaatan tanah sebagian besar
                        untuk pertanian tanaman pangan, perkebunan yakni
                        seluas 1.367,35 Ha atau&nbsp; 37,81% dari luas
                        wilayah. Sedangkan seluas 677,02 Ha(18,72%)
                        digunakan untuk bangunan perumahan serta
                        pekarangan, tempat usaha dan lain-lain.
                    </p>
                    <h4>Pimpinan Desa dan Jasa-Jasanya</h4>
                    <p>
                        Orang-orang yang pernah menjabat pimpinan/ Lurah
                        Desa Gunungtiga dan jasa-jasanya adalah :
                    </p>
                    <ol>
                        <li>(~ - 1919)</li>
                        <li>
                            <b>Brantas</b> (1919-1935)
                            <ul>
                                <li>Pembangunan SD 01 Tahun 1972</li>
                            </ul>
                        </li>
                        <li>
                            <b>Karyanom</b> (1935-1951)
                            <ul>
                                <li>
                                    Pembangunan Masjid Sibulu Dukuh dan
                                    Dk. Mremang Tahun 1945
                                </li>
                                <li>
                                    Pengadaan Tanah makam Muntuk dan
                                    Jojogan Tahun 1940
                                </li>
                            </ul>
                        </li>
                        <li><b>Cakra Yuda</b> (1951-1953)</li>
                        <li>
                            <b>Darya</b> (1953-1975)
                            <ul>
                                <li>Pembangunan SD 02 Tahun 1978</li>
                                <li>Rehab Balai Desa 1966</li>
                                <li>
                                    Pembangunan Jalan Desa dari RT 01-12
                                    Tahun 1967
                                </li>
                            </ul>
                        </li>
                        <li>
                            <b>Gunardi</b> (1975-1992)
                            <ul>
                                <li>
                                    Pembangunan Jalan Dk. Mremang
                                    Sebelah Barat
                                </li>
                                <li>
                                    Pembangunan Jaringan Air Ke Dk.
                                    Krajan Tahun 1976
                                </li>
                                <li>
                                    Pelebaran Jalan Desa dari RT 01-12
                                    Tahun 1980
                                </li>
                                <li>
                                    Pembagian Wilayah Desa Gunungtiga
                                    Menjadi 12 Rt dan 4 Rw
                                </li>
                                <li>
                                    Pembangunan Bendungan Pete Tahun
                                    1980 yang Mengaliri Area Pertanian
                                    Sekitar 20 Ha
                                </li>
                                <li>
                                    Memperoleh Piala Kalpataru Tahun
                                    1984
                                </li>
                                <li>Pembangunan Madrasah Tahun 1986</li>
                                <li>
                                    Pembangunan Masjid Sibulu Desa Tahun
                                    1986
                                </li>
                                <li>Merehab Balai Desa Tahun 1978</li>
                                <li>
                                    Pembangunan Jembatan Rt. 06 Tahun
                                </li>
                                <li>
                                    Pembangunan Jembatan RT 02 Tahun
                                    1984
                                </li>
                                <li>Pembangunan Lapangan Voli</li>
                            </ul>
                        </li>
                        <li>
                            <b>Firman Purwanto</b> (1992-2000)
                            <ul>
                                <li>
                                    Rehab Jembatan RT. 02 Tahun 1994
                                </li>
                                <li>Pengaspalan Jalan Desa</li>
                                <li>
                                    Pembangunan Drainase Jalan Dk.
                                    Sibulu Desa
                                </li>
                                <li>Pembangunan lapangan sepak bola</li>
                            </ul>
                        </li>
                        <li>
                            <b>Suwarno</b> (2000-2007)
                            <ul>
                                <li>
                                    Pembangunan jalan ke Dk. Kenteng
                                </li>
                                <li>Rehab masjid Mremang</li>
                            </ul>
                        </li>
                        <li>
                            <b>Makmur</b> (2007-Sekarang)
                            <ul>
                                <li>
                                    Rehab Balai Desa dan Pembangunan Polindes Tahun 2007
                                </li>
                                <li>
                                    Pemugaran 10 Rumah Tidak Layak Huni Tahun 2008
                                </li>
                                <li>
                                    Pembangunan Makadam Jalan Dk. Kenteng Tahun 2008
                                </li>
                                <li>
                                    Pembangunan Drainase Jalan Sibulu Dukuh Th 2009
                                </li>
                                <li>
                                    Pembangunan Talud Jalan Sibulu Dukuh Tahun 2010
                                </li>
                                <li>
                                    Pembangunan Jembatan ke Kuburan Tahun 2010
                                </li>
                                <li>
                                    Mendapatkan Program Prona untuk 150 Bidang Tanah Tahun 2010
                                </li>
                                <li>
                                    Pembangunan Rabat Beton Jalan Dk. Kenteng Tahun 2011
                                </li>
                                <li>
                                    Pembangunan Rabat Beton Jalan Tembus Rt 02
                                </li>
                                <li>
                                    Pengaspalan Jalan Desa Rt 01-10 Th 2011
                                </li>
                                <li>
                                    Pengaspalan Jalan DK. Mremang Tahun 2011
                                </li>
                                <li>
                                    Pembangunan TK Tahun 2012
                                </li>
                                <li>
                                    Pembangunan Jalan Tembus Rt 06 dan Rt 04-09 Tahun 2012
                                </li>
                                <li>
                                    Juara Lomba PHBS Tingkat Kabupaten Pemalang Tahun 2012
                                </li>
                                <li>
                                    Mendapatkan Program Prona untuk 150 Bidang Tanah Tahun 2013
                                </li>
                                <li>
                                    Pembangunan Jaringan Irigasi Dusun II Tahun 2013
                                </li>
                                <li>
                                    Pembangunan Jaringan Air Bersih Dk. Mremang Tahun 2013
                                </li>
                                <li>
                                    Mendapatkan Program Prona untuk 150 Bidang Tanah Tahun 2014
                                </li>
                                <li>
                                    Drainase Jalan Desa dari Rt 05-10 Tahun 2014
                                </li>
                                <li>
                                    Juara 2 Lomba PHBS Tingkat Propinsi Tahun 2014
                                </li>
                            </ul>
                        </li>
                    </ol>
                </div>
                {{-- English Content --}}
                <div class="row hidden" id="englishContent">
                    <h4>The definition of Village</h4>
                    <p>
                        The definition of Village, according to Government Regulation Number 43 Year 2014 around
                        Implementation of Laws and Regulations Number 6 Year 2014 around Village are Village and Costumary
                        Village, referred as Village, is a coalition of a legal community possessing a territorial
                        boundaries authorized to regulate and manage government affairs, the interests of the local
                        community based on community initiatives, origin rights, and/or traditional rights that are
                        recognized and respected in the system of government of Republic of Indonesia. Considering the
                        definition of a village as stipulated in Government Regulation No. 43/2014 on Villages, juridically,
                        the Gunungtiga area can be called a village and administratively belongs to the Belik District of
                        Pemalang Regency.
                    </p>
                    <h4>Nomenclature of Gunungtiga Village</h4>
                    <p>
                        The naming/nomenclature of Gunungtiga Village originate from customary from generation to generation
                        since the Kingdom of Mataram reign. The name Gunungtiga has the meaning of <b>"A solid stance like a
                            mountain from the three founding figures of Gunungtiga Village that cannot be united"</b> and
                        from the
                        Dutch colonial era to the present the name Gunungtiga has been preserved. However, formally the name
                        Gunungtiga has not been known to be standardized in the form of legislation such as regional
                        regulations, although the name Gunungtiga Village has been recognized administratively as one of the
                        village names from 211 villages in Pemalang Regency.
                    </p>

                    <h4>Geographical Conditions</h4>
                    <ul>
                        <li>Area: 3,616.615 Ha</li>
                        <li>Administrative Division: Sibulu Sub-Village (2 Rw and 6 Rt), Krajan Sub-Village (2 Rw and 6 Rt),
                            total 4 Rw and 12 Rt.</li>
                        <li>Topography: Highlands and mountainous areas.</li>
                        <li>Soil Types: Alluvial, regosol sandstones, letosal soils (sandstone rocks).</li>
                        <li>Land Utilization: 37.81% for agriculture and plantations, 18.72% for residential buildings,
                            yards, and business premises. The total area of Gunungtiga Village is 3,616.615 Ha, consisting
                            of 1,367.35 Ha of rice fields and 67.72 Ha of dry land.</li>
                    </ul>
                    <p>
                        The area of Gunungtiga Village is 3,616.615 hectares, consisting of 1,367.35 hectares of rice field
                        and 67.72 hectares of dry land. Sementara untuk jenis tanah di wilayah Desa Gunungtiga terdiri dari
                        tanah <em>alluvial</em> yang umumnya terletak di dataran rendah,
                        <em>regosil</em> batu-batuan pasir dan
                        intermedier terdapat di daerah perbukitan. Tanah
                        letosal yang terdiri dari batu bekuan pasir
                        banyak terdapat di daerah bukit sampai
                        pegunungan. Pemanfaatan tanah sebagian besar
                        untuk pertanian tanaman pangan, perkebunan yakni
                        seluas 1.367,35 Ha atau&nbsp; 37,81% dari luas
                        wilayah. Sedangkan seluas 677,02 Ha(18,72%)
                        digunakan untuk bangunan perumahan serta
                        pekarangan, tempat usaha dan lain-lain.
                    </p>
                    <h4>Village Leadership and Their Contributions</h4>
                    <p>
                        The people who have served as leaders / Lurah of Gunungtiga Village and their services are:
                    </p>
                    <ol>
                        <li>(~ - 1919)</li>
                        <li>
                            <b>Brantas</b> (1919-1935)
                            <ul>
                                <li>Construction of SD 01 in 1927</li>
                            </ul>
                        </li>
                        <li>
                            <b>Karyanom</b> (1935-1951)
                            <ul>
                                <li>Construction of Sibulu Dukuh Mosque and Mremang hamlet in 1945</li>
                                <li>Land acquisition of Muntuk and Jojogan cemetery in 1940</li>
                            </ul>
                        </li>
                        <li><b>Cakra Yuda</b> (1951-1953)</li>
                        <li>
                            <b>Darya</b> (1953-1975)
                            <ul>
                                <li>Construction of SD 02 in 1978</li>
                                <li>Village Hall Rehab 1966</li>
                                <li>Village Road Construction from RT 01 to 12 Year 1967</li>
                            </ul>
                        </li>
                        <li>
                            <b>Gunardi</b> (1975-1992)
                            <ul>
                                <li>Road Construction West Mremang Hamlet</li>
                                <li>Construction of Water Network to Krajan Hamlet Year 1976</li>
                                <li>Village Road Widening from RT 01 to 12 Year 1980</li>
                                <li>Subdivision of Gunungtiga Village into 12 RTs and 4 RWs</li>
                                <li>Construction of Pete Dam Year 1980 which irrigates an agricultural area of about 20
                                    hectares</li>
                                <li>Received the Kalpataru trophy in 1984</li>
                                <li>Madrasah construction in 1986</li>
                                <li>Construction of Sibulu Village Mosque 1986</li>
                                <li>Rehabilitating the Village Hall in 1978</li>
                                <li>Construction of RT 02 Bridge Year 1984</li>
                                <li>Construction of volleyball court</li>
                            </ul>
                        </li>
                        <li>
                            <b>Firman Purwanto</b> (1992-2000)
                            <ul>
                                <li>Bridge Rehab Rt. 02 Year 1994</li>
                                <li>Village Road Paving</li>
                                <li>Construction of Drainage Road in Sibulu Desa</li>
                                <li>Construction of soccer field</li>
                            </ul>
                        </li>
                        <li>
                            <b>Suwarno</b> (2000-2007)
                            <ul>
                                <li>Construction of Road to Kenteng Hamlet</li>
                                <li>Mremang Mosque Rehab</li>
                            </ul>
                        </li>
                        <li>
                            <b>Makmur</b> (2007-Present)
                            <ul>
                                <li>Rehab of Village Hall and construction of Polindes Year 2007</li>
                                <li>Restoration of 10 uninhabitable houses Year 2008</li>
                                <li>Construction of Makadam Road Kenteng Hamlet Year 2008</li>
                                <li>Construction of drainage on Sibulu Dukuh road in 2009</li>
                                <li>Construction of Talud on Sibulu Dukuh Road Year 2010</li>
                                <li>Construction of Bridge to Graveyard Year 2010</li>
                                <li>Obtaining Prona Program for 150 parcels of land in 2010</li>
                                <li>Construction of concrete rebate on Kenteng Street Hamlet Year 2011</li>
                                <li>Construction of a concrete rebate on the translucent road of Rt 02</li>
                                <li>Paving of Village Road Rt 01-10 Year 2011</li>
                                <li>Paving of Mremang Hamlet Road Year 2011</li>
                                <li>Kindergarten Construction Year 2012</li>
                                <li>Construction of Translucent Road Rt 06 and Rt 04-09 Year 2012</li>
                                <li>Champion of PHBS Competition at Pemalang Regency Level Year 2012</li>
                                <li>Obtaining Prona Program for 150 parcels of land Year 2013</li>
                                <li>Construction of Irrigation Network in Hamlet II Year 2013</li>
                                <li>Construction of Clean Water Network Mremang Hamlet Year 2013</li>
                                <li>Obtained Prona Program for 150 parcels of land Year 2014</li>
                                <li>Village Road Drainage from Rt 05-10 Year 2014</li>
                                <li>2nd place in PHBS competition at provincial level in 2014</li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>



    </div>

    </section>
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
@endsection

@section('scripts')
    <script>
        function toggleLanguage() {
            var bahasaContent = document.getElementById('bahasaContent');
            var englishContent = document.getElementById('englishContent');
            var title = document.getElementById('title');

            bahasaContent.classList.toggle('hidden');
            englishContent.classList.toggle('hidden');
            if (title.innerHTML === "SEJARAH DESA") {
                title.innerHTML = "VILLAGE’S HISTORY";
            } else {
                title.innerHTML = "SEJARAH DESA";
            }
        }
    </script>
@endsection

</html>
