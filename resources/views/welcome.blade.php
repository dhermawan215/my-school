@extends('layouts.app-front')
@section('fcontent')
    <!-- Header Start -->
    <div class="bg-header">
        <div class="container-fluid hero-header py-5 mb-1"
            style="background-image: url({{ asset('front/img/bg3edit.png') }}); width: 100%; min-height: 380px; background-position: center; background-size:cover">
            <div class="container py-5 ">
                <div class="row g-5 align-items-center mt-3">
                    <div class="col-lg-6 ">
                        <h1 class="display-4 mb-3 animated slideInDown text-white">
                            SMK BISA
                        </h1>
                        <p class="animated slideInDown text-white">
                            Menjadi lembaga pendidikan yang mengajarkan ahlak, agama, budaya serta teknologi yang
                            berpadu, untuk kemajuan Indonesia
                        </p>
                        <a href="" class="btn btn-success py-3 px-4 animated slideInDown">Bergabung Bersama!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Statistik Start -->
    <div class="container-xxl bg-white py-2 my-2">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <h1 class="display-6">Menjadi Bagian Kami</h1>
                <p class="text-primary fs-5 mb-5">
                    Mari bergabung dan maju bersama!
                </p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid mb-4" src="img/teacher.png" alt="" />
                    <h1 class="display-4" data-toggle="counter-up">50</h1>
                    <p class="fs-5 text-primary mb-0">Guru Pengajar Terbaik</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid mb-4" src="img/siswa.png" alt="" />
                    <h1 class="display-4" data-toggle="counter-up">986</h1>
                    <p class="fs-5 text-primary mb-0">Siswa Aktif</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid mb-4" src="img/alumin.png" alt="" />
                    <h1 class="display-4" data-toggle="counter-up">15320</h1>
                    <p class="fs-5 text-primary mb-0">Alumni</p>
                </div>
            </div>
        </div>
    </div>
    <!-- statistik End -->

    <!-- Jurusan Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <h1 class="display-6">Jurusan Kami</h1>
                <p class="text-primary fs-5 mb-5">
                    Siap Untuk Bersaing!
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-7.png" alt="" />
                        <h5 class="mb-3">TKJ</h5>
                        <p>
                            Jurusan Komputer dan Jaringan
                        </p>
                        <a href="">Lihat lebih jauh <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="" />
                        <h5 class="mb-3">RPL</h5>
                        <p>
                            Jurusan Rekayasa Perangkat Lunak
                        </p>
                        <a href="">Lihat lebih jauh <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-9.png" alt="" />
                        <h5 class="mb-3">TER</h5>
                        <p>
                            Jurusan Teknik Elektronika Robotik
                        </p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-5.png" alt="" />
                        <h5 class="mb-3">DKV</h5>
                        <p>
                            Jurusan Desain Industri Kreatif dan Animasi
                        </p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="" />
                        <h5 class="mb-3">TKRO</h5>
                        <p>
                            Jurusan Teknik Kendaraan Ringan Otomotif
                        </p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-8.png" alt="" />
                        <h5 class="mb-3">TB</h5>
                        <p>
                            Jurusan Teknik Busana dan Modeling
                        </p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jurusan End -->

    <!-- Roadmap Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <h1 class="display-6">Ekstra kulikuler</h1>
                <p class="text-primary fs-5 mb-5">
                    Tingkatkan skill kamu di sini
                </p>
            </div>
            <div class="owl-carousel roadmap-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Pramuka</h5>
                    <span>Melatih kepemimpinan dan integritas</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Voli</h5>
                    <span>Voli putra dan putri</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Bulu Tangkis</h5>
                    <span>Bulu tangkis putra dan putri</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Sepakbola</h5>
                    <span>Sepakbola putra</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Futsal</h5>
                    <span>Futsal putra</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Rohis</h5>
                    <span>Berbagi nasihat dan ilmu agama</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>PMR</h5>
                    <span>Palang merah remaja</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>IT and Programming</h5>
                    <span>Grow up skill di bidang teknologi industri</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Roadmap End -->

    <!-- Berita Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <h1 class="display-6">Berita dan Kegiatan</h1>
                <p class="text-primary fs-5 mb-5"></p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-primary">
                                <h5 class="mb-3 text-white">Berita 1</h5>
                            </div>
                            <div class="card-body">
                                <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="" />
                                <div class="ps-4">
                                    <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                                        sit, sed stet lorem sit clita duo justo</span>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="">Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-primary">
                                <h5 class="mb-3 text-white">Berita 1</h5>
                            </div>
                            <div class="card-body">
                                <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="" />
                                <div class="ps-4">
                                    <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                                        sit, sed stet lorem sit clita duo justo</span>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="">Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-primary">
                                <h5 class="mb-3 text-white">Berita 1</h5>
                            </div>
                            <div class="card-body">
                                <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="" />
                                <div class="ps-4">
                                    <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                                        sit, sed stet lorem sit clita duo justo</span>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="">Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-primary">
                                <h5 class="mb-3 text-white">Berita 1</h5>
                            </div>
                            <div class="card-body">
                                <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="" />
                                <div class="ps-4">
                                    <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                                        sit, sed stet lorem sit clita duo justo</span>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="">Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-primary">
                                <h5 class="mb-3 text-white">Berita 1</h5>
                            </div>
                            <div class="card-body">
                                <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="" />
                                <div class="ps-4">
                                    <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                                        sit, sed stet lorem sit clita duo justo</span>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="">Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-primary">
                                <h5 class="mb-3 text-white">Berita 1</h5>
                            </div>
                            <div class="card-body">
                                <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="" />
                                <div class="ps-4">
                                    <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                                        sit, sed stet lorem sit clita duo justo</span>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="">Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Token Sale Start -->
    <!-- <div class="container-xxl bg-light py-5 my-5">
                                        <div class="container py-5">
                                            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                                                <h1 class="display-6">Token Sale</h1>
                                                <p class="text-primary fs-5 mb-5">Token Sale Countdown</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                                                    <div class="bg-white text-center p-3">
                                                        <h1 class="mb-0">0</h1>
                                                        <span class="text-primary fs-5">Days</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                                                    <div class="bg-white text-center p-3">
                                                        <h1 class="mb-0">0</h1>
                                                        <span class="text-primary fs-5">Hours</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                                                    <div class="bg-white text-center p-3">
                                                        <h1 class="mb-0">0</h1>
                                                        <span class="text-primary fs-5">Minutes</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                                                    <div class="bg-white text-center p-3">
                                                        <h1 class="mb-0">0</h1>
                                                        <span class="text-primary fs-5">Seconds</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center py-4">
                                                    <a class="btn btn-primary py-3 px-4" href="">Buy Token</a>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <img class="img-fluid m-1" src="img/payment-1.png" alt="" style="width: 50px" />
                                                    <img class="img-fluid m-1" src="img/payment-2.png" alt="" style="width: 50px" />
                                                    <img class="img-fluid m-1" src="img/payment-3.png" alt="" style="width: 50px" />
                                                    <img class="img-fluid m-1" src="img/payment-4.png" alt="" style="width: 50px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
    <!-- Token Sale Start -->

    <!-- FAQs Start -->
    <!-- <div class="container-xxl py-5 bg-white">
                                        <div class="container">
                                            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                                                <h1 class="display-6">FAQs</h1>
                                                <p class="text-primary fs-5 mb-5">Frequently Asked Questions</p>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    How to build a website?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                                                                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                                                                    duo. Sit rebum magna duo labore no diam.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    How long will it take to get a new website?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                                                                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                                                                    duo. Sit rebum magna duo labore no diam.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                                            <h2 class="accordion-header" id="headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    Do you only create HTML websites?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                                                                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                                                                    duo. Sit rebum magna duo labore no diam.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                                            <h2 class="accordion-header" id="headingFour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                                    Will my website be mobile-friendly?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                                                                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                                                                    duo. Sit rebum magna duo labore no diam.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                                            <h2 class="accordion-header" id="headingFive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                    Will you maintain my site for me?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                                                                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                                                                    duo. Sit rebum magna duo labore no diam.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                                            <h2 class="accordion-header" id="headingSix">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                    I’m on a strict budget. Do you have any low cost options?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                                                                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                                                                    duo. Sit rebum magna duo labore no diam.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                                                            <h2 class="accordion-header" id="headingSeven">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                                    Will you maintain my site for me?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                                                                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                                                                    duo. Sit rebum magna duo labore no diam.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                                            <h2 class="accordion-header" id="headingEight">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                                    I’m on a strict budget. Do you have any low cost options?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                                                                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                                                                    duo. Sit rebum magna duo labore no diam.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
    <!-- FAQs Start -->
@endsection
