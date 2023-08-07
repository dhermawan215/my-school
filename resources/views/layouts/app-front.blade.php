<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Website Sekolah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('front/img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary">
                <img class="img-fluid me-2" src="#" alt="" style="width: 45px" />SMK BISA
            </h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="{{ '/' }}" class="nav-item nav-link active">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang</a>
                    <div class="dropdown-menu shadow-sm m-0">
                        <a href="{{ route('about.visi-misi') }}" class="dropdown-item">Visi Misi</a>
                        <a href="token.html" class="dropdown-item">Kompetensi Keahlian</a>
                        <a href="faq.html" class="dropdown-item">Sejarah</a>
                        <a href="404.html" class="dropdown-item">Profil</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kami</a>
                    <div class="dropdown-menu shadow-sm m-0">
                        <a href="#" class="dropdown-item">Kontak Kami</a>
                        <a href="#" class="dropdown-item">BKK</a>
                        <a href="#" class="dropdown-item">Streaming Kegiatan</a>
                        <a href="#" class="dropdown-item">Galeri Kegiatan</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">PPDB</a>
                <a href="contact.html" class="nav-item nav-link">E-Learning</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('fcontent')

    <!-- Footer Start -->
    <div class="container-fluid bg-white footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <hr>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">SMK BISA</h5>
                    <p>
                        <i class="fa fa-map-marker-alt me-3"></i>
                        HO: Cikarang Selatan Bekasi
                    </p>
                    <p><i class="fa fa-phone-alt me-3"></i>Branch office: Ampelgading Pemalang</p>
                    <p><i class="fa fa-envelope me-3"></i>marketing@technosolution.site</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Tautan</h5>
                    <a class="btn btn-link" href="">Cloud SMK BISA</a>
                    <a class="btn btn-link" href="">E-Raport</a>
                    <a class="btn btn-link" href="">Portal</a>
                    <a class="btn btn-link" href="">Perpustakaan</a>
                    <a class="btn btn-link" href="">BKK</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Web terkait</h5>
                    <a class="btn btn-link" href="">Dinas pendidikan</a>
                    <a class="btn btn-link" href="">PPDB</a>
                    <a class="btn btn-link" href="">Yayasan</a>
                    <a class="btn btn-link" href="">kemendikbud</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Follow Us</h5>
                    <div class="d-flex">
                        <a class="btn btn-square rounded-circle me-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">2023 - SMK BISA</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

                        <a href="#" class="text-decoration-none">Qplus by ADR technosolution</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('front/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('front/js/main.js') }}"></script>
    @stack('fjs_custom')
</body>

</html>
