@extends('layouts.layout-page')

<style>
    .title-1 {
        background-color: #bf9d9d;
    }

    .title-2 {
        background-color: #bb7979;
    }

    .title-3 {
        background-color: #bb4b4b;
    }

    .title-4 {
        background-color: #b82626;
    }

    .title-hover {
        font-family: sans-serif;
    }

    .title-hover:hover {
        background-color: #000000;
        color: white;
    }

    .link-post {
        color: #b82626;
    }

    .link-post:hover {
        color: #000000
    }

</style>



@section('content')
<section class="slider" data-aos="fade-right">
    <div class="">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/slider1.png') }}" class="d-block w-100" style="height: 40rem;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slider2.png') }}" class="d-block w-100" style="height: 40rem;" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section>
    <div class="row g-0 w-100">
        <div class="col-lg-3 title-1 title-hover">
            <div class="p-3">
                <h5>Suplemen Protein Whey</h5>
                <p style="text-align: justify">Suplemen protein whey adalah produk yang mengandung protein berkualitas
                    tinggi yang diekstraksi dari
                    susu. Suplemen ini umumnya digunakan oleh mereka yang ingin meningkatkan massa otot, mempercepat
                    pemulihan otot setelah latihan, atau memenuhi kebutuhan protein yang sulit terpenuhi melalui makanan
                    biasa. Suplemen protein whey tersedia dalam berbagai rasa dan dapat dikonsumsi sebagai shake protein
                    setelah latihan atau sebagai tambahan protein dalam makanan sehari-hari.</p>
            </div>
        </div>
        <div class="col-lg-3 title-2 title-hover">
            <div class="p-3">
                <h5>Suplemen Pre-Workout</h5>
                <p style="text-align: justify">Suplemen pre-workout dirancang untuk meningkatkan energi, fokus, dan
                    performa selama sesi latihan.
                    Biasanya mengandung kombinasi bahan seperti kafein, beta-alanine, kreatin, dan nitrat, suplemen ini
                    dapat membantu meningkatkan daya tahan, meningkatkan konsentrasi, dan memberikan dorongan ekstra
                    selama
                    latihan. Suplemen pre-workout biasanya dikonsumsi sebelum latihan untuk memperoleh manfaatnya.</p>
            </div>
        </div>
        <div class="col-lg-3 title-3 title-hover">
            <div class="p-3">
                <h5>Suplemen BCAA</h5>
                <p style="text-align: justify">BCAA merupakan singkatan dari asam amino rantai bercabang, yaitu leusin,
                    isoleusin, dan valin.
                    Suplemen
                    BCAA mengandung kombinasi ketiga asam amino ini dan sering digunakan untuk mempercepat pemulihan
                    otot,
                    mengurangi kelelahan selama latihan, dan mempromosikan pertumbuhan massa otot. Suplemen ini dapat
                    dikonsumsi sebelum, selama, atau setelah latihan untuk mendukung kinerja dan pemulihan otot.</p>
            </div>
        </div>
        <div class="col-lg-3 title-4 title-hover">
            <div class="p-3">
                <h5>Suplemen Omega-3</h5>
                <p style="text-align: justify">Suplemen omega-3 mengandung asam lemak omega-3, seperti EPA (asam
                    eicosapentaenoic) dan DHA (asam
                    docosahexaenoic). Omega-3 adalah lemak sehat yang memiliki banyak manfaat bagi kesehatan jantung,
                    otak,
                    dan sistem saraf. Suplemen omega-3 sering digunakan oleh mereka yang tidak mendapatkan cukup asam
                    lemak
                    omega-3 melalui makanan sehari-hari, terutama ikan berlemak. Mereka dapat membantu mengurangi
                    peradangan, meningkatkan fungsi otak, dan mendukung kesehatan keseluruhan.</p>
            </div>
        </div>
    </div>
</section>
<section class="konten" data-aos="fade-up">
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="">
                    <img src="{{ asset('images/profil.png')}}"
                        style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt=""
                        width="350" height="400">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="" style="text-align: left">
                    <h4><strong>SUPLEMEN FITNESS</strong></h4>
                    <P style="margin-top: -2px; color:#1081c7;">Tempat Pemilihan Suplemen Fitness Terbaik</P>
                    <p style="text-align: justify">Pemilihan suplemen fitness yang tepat dapat memberikan manfaat
                        tambahan dalam mencapai tujuan
                        kesehatan dan kebugaran. Namun, penting untuk diingat bahwa suplemen tidak boleh digunakan
                        sebagai pengganti pola makan yang seimbang dan gaya hidup sehat secara keseluruhan.
                        Ingatlah bahwa pemilihan suplemen fitness yang tepat juga memerlukan pemahaman tentang kebutuhan
                        dan tujuan Anda, </p>
                    <p style="text-align: justify">Selalu ingat bahwa suplemen fitness hanya merupakan tambahan untuk
                        pola makan dan gaya hidup
                        sehat secara keseluruhan. Penting untuk menjaga pola makan yang seimbang, berolahraga secara
                        teratur, dan mendapatkan istirahat yang cukup untuk mencapai kebugaran yang optimal.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section data-aos="fade-right">
    <div class="row g-0 text-center text-light"
        style="margin-top: 30px; padding: 30px; background-color: #1f1f1f; margin-bottom: 30px">
        <div class="col-lg-6 col-md-4 ">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <strong>www.21090118.phbtegal.com</strong>
        </div>
        <div class="col-lg-6 col-md-8">Layanan Kami</div>
    </div>
</section>
<section>
    <div class="container" data-aos="fade-up">
        <div class="bagian-1 text-center">
            <h2><strong>Layanan Kami</strong></h2>
            <p>Website yang menyediakan informasi dan panduan lengkap mengenai pemilihan suplemen fitness yang tepat.
                Kami
                bertujuan untuk membantu pengguna dalam memahami jenis-jenis suplemen yang tersedia di pasaran, serta
                memberikan panduan yang akurat dan terpercaya untuk memilih suplemen yang sesuai dengan kebutuhan dan
                tujuan
                kesehatan dan kebugaran mereka.</p>
        </div>

        <div class="container" style="text-align: justify">
            <div class="row gx-5">
                <div class="col-lg">
                    <div class="p-3 border bg-light">
                        <p>Metode SAW dapat membantu dalam pemilihan suplemen fitness dengan memberikan pemahaman yang
                            lebih sistematis dan objektif. Namun, perlu diingat bahwa hasil dari metode ini masih
                            bergantung pada kriteria dan bobot yang ditentukan. </p>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="p-3 border bg-light">Untuk setiap suplemen yang direkomendasikan, kami memberikan
                        perincian komprehensif tentang produk, termasuk tujuannya, bahan utama, petunjuk dosis, dan
                        manfaat potensial. Kami juga menyoroti potensi efek samping atau interaksi untuk memastikan Anda
                        memiliki semua informasi yang diperlukan untuk membuat keputusan yang tepat.</div>
                </div>
                <div class="col-lg">
                    <div class="p-3 border bg-light">
                        <p>Layanan kami tidak berakhir dengan rekomendasi. Kami menawarkan dukungan berkelanjutan untuk
                            menjawab pertanyaan atau masalah apa pun yang mungkin Anda miliki tentang suplemen yang
                            direkomendasikan. Tim kami tersedia untuk memberikan panduan dan menjawab setiap pertanyaan
                            yang mungkin Anda miliki selama perjalanan kebugaran Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section data-aos="fade-right">
    <div class="row g-0 text-center text-light"
        style="margin-top: 30px; padding: 30px; background-color: #1f1f1f; margin-bottom: 30px">
        <div class="col-lg-6 col-md-4 ">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <strong>www.21090118.phbtegal.com</strong>
        </div>
        <div class="col-lg-6 col-md-8">Post</div>
    </div>
</section>

<section>
    <div class="container" style="text-align: justify">
        <div class="row">
            <div class="col-lg-4">
                <a href="#" style="text-decoration: none">
                    <div class="p-4 mt-5 text-center border bg-light">
                        <img src="{{ url('images/post1.jpg')}}" style="width: 300px; height: 230px;" alt="">
                        <p style="color: #717577; text-align: center; margin-top: 10px">26 Juni 2023 | comment (0)</p>
                        <h3 class="link-post">Pemilihan Suplemen Fitness Terbaik</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" style="text-decoration: none">
                    <div class="p-4 mt-5 text-center border bg-light">
                        <img src="{{ url('images/post2.jpg')}}" style="width: 300px; height: 230px;" alt="">
                        <p style="color: #717577; text-align: center; margin-top: 10px">26 Juni 2023 | comment (0)</p>
                        <h3 class="link-post">Cara Memilih Suplemen Fitness Terbaik</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" style="text-decoration: none">
                    <div class="p-4 mt-5 mb-5 text-center border bg-light" style="border-color: white">
                        <img src="{{ url('images/post3.jpg')}}" style="width: 300px; height: 230px;" alt="">
                        <p style="color: #717577; text-align: center; margin-top: 10px">26 Juni 2023 | comment (0)</p>
                        <h3 class="link-post">Pahami Suplemen Fitness Terbaik</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>



@endsection
