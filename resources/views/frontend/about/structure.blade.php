@extends('frontend.layouts.app')

@push('css')
    <style>
        .org-card {
            border-radius: 20px;
            transition: transform 0.3s ease;
        }

        .org-card:hover {
            transform: translateY(-5px);
        }

        .org-title {
            font-weight: 700;
            font-size: 1.25rem;
        }

        .org-position {
            font-size: 0.95rem;
            color: #6c757d;
        }

        .org-structure-line {
            width: 2px;
            background-color: #198754;
            height: 40px;
            margin: 0 auto;
        }

        @media (max-width: 767.98px) {
            .org-title {
                font-size: 1.1rem;
            }
        }
    </style>
@endpush

@section('content')
    <header class="header-2 position-relative overflow-hidden">
        <div class="page-header min-vh-75"
            style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-position: center; background-size: cover;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container h-100 d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 text-white">
                        <h1 class="fw-bold text-white">Struktur Organisasi</h1>
                        <p class="lead opacity-9">
                            Struktur organisasi Dewan Da’wah Risalah Islamiyyah dirancang untuk memastikan koordinasi yang
                            efektif, kolaborasi lintas bidang, dan pelaksanaan program dakwah serta pemberdayaan masyarakat
                            yang berkelanjutan di Sulit Air.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        {{-- STRUKTUR ORGANISASI --}}
        <section class="py-5 my-4">
            <div class="container text-center">
                <h2 class="text-dark mb-5 fw-bold">Struktur Organisasi Dewan Da’wah Risalah Islamiyyah</h2>
                <p class="text-muted p-horizontal">
                    Struktur ini menggambarkan komitmen Dewan Da’wah Risalah Islamiyyah untuk bekerja secara kolektif dan
                    transparan dalam menyelenggarakan dakwah, pendidikan, dan program sosial demi kemaslahatan umat.
                </p><br>

                {{-- Ketua Umum --}}
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card org-card shadow bg-dark text-white p-4">
                            <i class="material-symbols-rounded text-success text-3xl mb-3">crown</i>
                            <h5 class="org-title text-white">H. Muhammad Amin</h5>
                            <p class="org-position text-white opacity-8">Ketua Umum</p>
                        </div>
                    </div>
                </div>

                <div class="org-structure-line my-4"></div>

                {{-- Sekretaris & Bendahara --}}
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-4">
                        <div class="card org-card shadow-sm bg-light p-4">
                            <i class="material-symbols-rounded text-success text-3xl mb-3">person</i>
                            <h6 class="org-title">Ust. Syarifuddin</h6>
                            <p class="org-position">Sekretaris Jenderal</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card org-card shadow-sm bg-light p-4">
                            <i class="material-symbols-rounded text-success text-3xl mb-3">person</i>
                            <h6 class="org-title">Ny. Fatimah Zahra</h6>
                            <p class="org-position">Bendahara Umum</p>
                        </div>
                    </div>
                </div>

                <div class="org-structure-line my-4"></div>

                {{-- Bidang-Bidang --}}
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card org-card shadow-sm bg-gray-100 p-4 h-100">
                            <i class="material-symbols-rounded text-success text-3xl mb-3">school</i>
                            <h6 class="org-title">Bidang Pendidikan & Kaderisasi</h6>
                            <p class="org-position">Koordinator: Ust. Nur Aisyah</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card org-card shadow-sm bg-gray-100 p-4 h-100">
                            <i class="material-symbols-rounded text-success text-3xl mb-3">handshake</i>
                            <h6 class="org-title">Bidang Kemitraan & Advokasi</h6>
                            <p class="org-position">Koordinator: Bapak Hendra</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card org-card shadow-sm bg-gray-100 p-4 h-100">
                            <i class="material-symbols-rounded text-success text-3xl mb-3">diversity_3</i>
                            <h6 class="org-title">Bidang Sosial & Pengabdian</h6>
                            <p class="org-position">Koordinator: Ibu Dwi Lestari</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card org-card shadow-sm bg-gray-100 p-4 h-100">
                            <i class="material-symbols-rounded text-success text-3xl mb-3">campaign</i>
                            <h6 class="org-title">Bidang Komunikasi & Publikasi</h6>
                            <p class="org-position">Koordinator: Arifin Rahman</p>
                        </div>
                    </div>
                </div>

                <div class="org-structure-line my-4"></div>

                {{-- Anggota --}}
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card org-card shadow-sm bg-gray-100 p-4 h-100">
                            <i class="material-symbols-rounded text-success text-3xl mb-3">groups</i>
                            <h6 class="org-title">Relawan & Anggota</h6>
                            <p class="org-position">Terdiri dari mubaligh, ustadz/ustadzah, dan relawan komunitas yang aktif
                                di lapangan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
