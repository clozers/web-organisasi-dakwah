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
        style="background-image: url('{{ asset('assets_frontend/img/apoteker-2.png') }}'); background-position: center; background-size: cover;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container h-100 d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 text-white">
                    <h1 class="fw-bold text-white">Struktur Organisasi</h1>
                    <p class="lead opacity-9">
                        Struktur organisasi Serikat Apoteker Indonesia dirancang untuk memastikan koordinasi yang
                        efektif,
                        kolaborasi lintas bidang, dan pelayanan terbaik bagi seluruh anggota.
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
            <h2 class="text-dark mb-5 fw-bold">Struktur Organisasi SAI</h2>
            <p class="text-muted p-horizontal">
                Struktur ini menggambarkan komitmen Serikat Apoteker Indonesia untuk bekerja secara kolektif dan
                transparan dalam
                memperjuangkan kepentingan profesi dan meningkatkan kualitas pelayanan kefarmasian nasional.
            </p><br>

            {{-- Ketua Umum --}}
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card org-card shadow bg-dark text-white p-4">
                        <i class="material-symbols-rounded text-success text-3xl mb-3">crown</i>
                        <h5 class="org-title text-white">Drs. Andi Pratama, Apt.</h5>
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
                        <h6 class="org-title">Sri Wulandari, S.Farm., Apt.</h6>
                        <p class="org-position">Sekretaris Jenderal</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card org-card shadow-sm bg-light p-4">
                        <i class="material-symbols-rounded text-success text-3xl mb-3">person</i>
                        <h6 class="org-title">Rahmat Hidayat, S.Farm., Apt.</h6>
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
                        <h6 class="org-title">Bidang Pengembangan Profesi</h6>
                        <p class="org-position">Koordinator: Nur Aisyah, Apt.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card org-card shadow-sm bg-gray-100 p-4 h-100">
                        <i class="material-symbols-rounded text-success text-3xl mb-3">handshake</i>
                        <h6 class="org-title">Bidang Kerja Sama & Advokasi</h6>
                        <p class="org-position">Koordinator: Budi Santoso, Apt.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card org-card shadow-sm bg-gray-100 p-4 h-100">
                        <i class="material-symbols-rounded text-success text-3xl mb-3">diversity_3</i>
                        <h6 class="org-title">Bidang Sosial & Pengabdian</h6>
                        <p class="org-position">Koordinator: Dwi Lestari, Apt.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card org-card shadow-sm bg-gray-100 p-4 h-100">
                        <i class="material-symbols-rounded text-success text-3xl mb-3">campaign</i>
                        <h6 class="org-title">Bidang Komunikasi & Publikasi</h6>
                        <p class="org-position">Koordinator: Arif Rahman, Apt.</p>
                    </div>
                </div>
            </div>

            <div class="org-structure-line my-4"></div>

            {{-- Anggota --}}
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card org-card shadow-sm bg-gray-100 p-4 h-100">
                        <i class="material-symbols-rounded text-success text-3xl mb-3">groups</i>
                        <h6 class="org-title">Anggota</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection