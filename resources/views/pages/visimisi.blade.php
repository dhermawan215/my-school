@extends('layouts.app-front')
@section('fcontent')
    <style>
        .container-fluid .overlaybg {
            background-color: rgb(45 46 52 / 60 %);
        }
    </style>
    <!-- Header Start -->
    <div class="bg-header">
        <div class="container-fluid hero-header py-5 mb-5"
            style="background-image: url({{ asset('front/img/book.png') }}); width: 100%; min-height: 320px; background-position: center; background-size:cover">
            <div class="overlay overlaybg">
                <div class="container py-5 ">
                    <div class="row g-5 align-items-center text-center">
                        <div class="col-lg-12 ">
                            <h1 class="display-4 mb-3 animated slideInDown text-white">
                                Visi Misi
                            </h1>
                            <p class="animated slideInDown text-white">
                                Visi dan Misi kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Jurusan Start -->
    <div class="container-xxl bg-white py-5 my-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-12">
                    <h3 class="text-uppercase text-primary">SMK BISA</h3>
                    <p><span class="fw-bold">Visi</span> adalah suatu rangkaian kata yang memuat impian, cita-cita, nilai,
                        masa depan dari suatu
                        organisasi, baik di dalam sebuah lembaga hingga perusahaan. Visi juga merupakan sebuah tujuan
                        organisasi dalam bekerja. Visi tercipta dari hasil pemikiran para pendirinya terkait gambaran masa
                        depan organisasi. Visi dapat memiliki fungsi untuk menentukan langkah ke depan, menginspirasi
                        anggota, memotivasi anggota agar memberikan kontribusi yang maksimal</p>
                    <p class="mt-2 mb-2">
                        Adapun <span class="fw-bold">Visi</span> kami adalah:
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-12">
                    <div class="service-item p-5">
                        <img class="img-fluid mb-4" src="img/icon-7.png" alt="" />
                        <h3 class="mb-3">Visi</h3>
                        <p>
                            Menjadi lembaga pendidikan bertaraf internasional, berahlakul karimah, dan berteknologi
                        </p>
                        {{-- <a href="">Lihat lebih jauh <i class="fa fa-arrow-right ms-2"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="row g-4 align-items-center mt-2">
                <div class="col-lg-12">
                    <p><span class="fw-bold">Misi</span> adalah bagaimana sebuah langkah untuk mewujudkan
                        cita-citanya tersebut di masa depan. Selain itu, misi juga akan menjawab beberapa pertanyaan seperti
                        bagaimana sikap perusahaan, bagaimana upaya untuk menang, hingga bagaimana mengukur sebuah proses
                        kemajuan. Jadi, misi dapat disimpulkan sebagai sekumpulan rencana atau cara yang ditentukan untuk
                        mewujudkan visi yang sudah ditetapkan.</p>
                    <p class="mt-2 mb-2">
                        Adapun <span class="fw-bold">Misi</span> kami adalah:
                    </p>
                </div>
            </div>
            <div class="row g-4 mt-2">
                <div class="col-lg-12 col-md-12">
                    <div class="service-item p-5">
                        <img class="img-fluid mb-4" src="img/icon-7.png" alt="" />
                        <h3 class="mb-3">Misi</h3>
                        <ol class="list-group list-group-numbered p-2 mt-2">
                            <li>Bertaqwa dan berahlak mulia</li>
                            <li>Menjalankan sistem pendidikan berbasisi kompetensi industri dan bisnis</li>
                            <li>Optimalisasi teknologi di semua bidang</li>
                        </ol>
                        {{-- <a href="">Lihat lebih jauh <i class="fa fa-arrow-right ms-2"></i></a> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- jurusan End -->
@endsection
