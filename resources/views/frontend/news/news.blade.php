@extends('frontend.layouts.app')

@push('css')
    <style>
        .news-card img {
            border-radius: 1rem;
            transition: transform 0.3s ease;
        }

        .news-card:hover img {
            transform: scale(1.05);
        }

        .news-card .card-body {
            text-align: justify;
        }

        .news-header {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('{{ asset(' assets_frontend/img/logo.jpg') }}') center/cover;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .news-header h1 {
            color: #fff;
            font-weight: 700;
        }

        .news-card img {
            height: 220px;
            /* atur tinggi gambar (bisa disesuaikan misalnya 200–250px) */
            width: 100%;
            object-fit: cover;
            /* biar gambar ter-crop rapi tanpa distorsi */
            border-radius: 0.75rem;
            /* biar sudutnya halus */
            transition: transform 0.3s ease;
        }

        .news-card:hover img {
            transform: scale(1.05);
        }


        @media (max-width: 767.98px) {
            .p-horizontal {
                text-align: justify;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Header -->
    <header class="header-2 position-relative overflow-hidden">
        <div class="page-header min-vh-75"
            style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-position: center; background-size: cover;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container h-100 d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-11 text-white">
                        <h1 class="fw-bold text-white">Berita & Artikel Terkini</h1>
                        <p class="text-white-50 mt-3">Informasi kegiatan dakwah, pendidikan, dan pemberdayaan masyarakat oleh
                            Dewan Da’wah Risalah Islamiyyah (Sulit Air).</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Konten Berita -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <section class="py-5">
            <div class="container">
                <div class="row mb-5 text-center">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-dark fw-bold mb-3">Artikel & Berita Terbaru</h2>
                        <p class="text-muted p-horizontal">Temukan berita, artikel, dan informasi menarik seputar kegiatan
                            dakwah, program pendidikan, serta inisiatif sosial yang dilaksanakan oleh Dewan Da’wah Risalah
                            Islamiyyah di Sulit Air.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Kartu Berita 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card news-card shadow-sm h-100">
                            <a href="#">
                                <img src="{{ asset('assets_frontend/img/logo.jpg') }}" class="card-img-top"
                                    alt="Judul Berita 1">
                            </a>
                            <div class="card-body">
                                <h5 class="fw-bold">Judul Artikel 1 — Penguatan Kader</h5>
                                <p class="text-muted small mb-2"><i class="far fa-calendar me-1"></i>03 November 2025</p>
                                <p class="text-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Program penguatan kader
                                    bertujuan meningkatkan kapasitas mubaligh dan relawan dalam menyampaikan dakwah yang
                                    kontekstual...
                                </p>
                                <a href="#" class="btn btn-sm bg-gradient-dark text-white mt-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu Berita 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card news-card shadow-sm h-100">
                            <a href="#">
                                <img src="{{ asset('assets_frontend/img/logo.jpg') }}" class="card-img-top"
                                    alt="Judul Berita 2">
                            </a>
                            <div class="card-body">
                                <h5 class="fw-bold">Judul Artikel 2 — Aksi Sosial</h5>
                                <p class="text-muted small mb-2"><i class="far fa-calendar me-1"></i>29 Oktober 2025</p>
                                <p class="text-secondary">
                                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                    molestiae consequatur. Laporan aksi sosial: distribusi bantuan dan pelatihan usaha
                                    mikro...
                                </p>
                                <a href="#" class="btn btn-sm bg-gradient-dark text-white mt-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu Berita 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card news-card shadow-sm h-100">
                            <a href="#">
                                <img src="{{ asset('assets_frontend/img/logo.jpg') }}" class="card-img-top"
                                    alt="Judul Berita 3">
                            </a>
                            <div class="card-body">
                                <h5 class="fw-bold">Judul Artikel 3 — Kemitraan & Program</h5>
                                <p class="text-muted small mb-2"><i class="far fa-calendar me-1"></i>20 Oktober 2025</p>
                                <p class="text-secondary">
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Kolaborasi
                                    terbaru dengan lembaga X untuk memperluas jangkauan program pendidikan...
                                </p>
                                <a href="#" class="btn btn-sm bg-gradient-dark text-white mt-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-dark">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">
                                    < </a>
                            </li>
                            <li class="page-item active"><a class="page-link text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">></a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </section>
    </div>
@endsection
