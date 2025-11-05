@extends('frontend.layouts.app')

@push('css')
<style>
    .seminar-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .seminar-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 767.98px) {
        .p-horizontal {
            text-align: justify;
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
                    <h1 class="text-white mb-3">Daftar Seminar</h1>
                    <p class="lead text-white opacity-8">
                        Temukan berbagai seminar kefarmasian dan kegiatan pengembangan profesi yang diadakan oleh
                        Serikat Apoteker Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="text-dark mb-0 fw-bold">Seminar & Pelatihan Terkini</h2>
                    <p class="text-muted mt-3 p-horizontal">
                        Tingkatkan kompetensi dan pengetahuan Anda dengan mengikuti seminar, pelatihan, dan workshop
                        terbaru yang kami selenggarakan di berbagai daerah di Indonesia.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Contoh 1 -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card seminar-card border-0 shadow-sm h-100">
                        <img src="{{ asset('assets_frontend/img/apoteker-2.png') }}" class="card-img-top"
                            alt="Seminar 1">
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Seminar Nasional Kefarmasian 2025</h5>
                            <p class="text-muted mb-3">
                                20 Januari 2025 — Hotel Horizon Karawang
                            </p>
                            <p class="text-sm p-horizontal">
                                Mengangkat tema “Digitalisasi Layanan Farmasi untuk Indonesia Sehat”.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center">
                            <a href="#" class="btn bg-gradient-info btn-sm">Daftar Seminar</a>
                        </div>
                    </div>
                </div>

                <!-- Contoh 2 -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card seminar-card border-0 shadow-sm h-100">
                        <img src="{{ asset('assets_frontend/img/apoteker-3.png') }}" class="card-img-top"
                            alt="Seminar 2">
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Pelatihan CPD Apoteker 2025</h5>
                            <p class="text-muted mb-3">
                                5 Februari 2025 — Online via Zoom
                            </p>
                            <p class="text-sm p-horizontal">
                                Pelatihan berbasis kompetensi untuk meningkatkan keahlian dalam praktik farmasi klinik.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center">
                            <a href="#" class="btn bg-gradient-success btn-sm">Daftar Seminar</a>
                        </div>
                    </div>
                </div>

                <!-- Contoh 3 -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card seminar-card border-0 shadow-sm h-100">
                        <img src="{{ asset('assets_frontend/img/apoteker-4.png') }}" class="card-img-top"
                            alt="Seminar 3">
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Workshop Farmasi Industri</h5>
                            <p class="text-muted mb-3">
                                10 Maret 2025 — Bandung, Jawa Barat
                            </p>
                            <p class="text-sm p-horizontal">
                                Pelatihan mendalam terkait produksi obat, CPOB, dan manajemen mutu dalam industri
                                farmasi.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center">
                            <a href="#" class="btn bg-gradient-warning btn-sm">Daftar Seminar</a>
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

    {{-- <section class="py-6 bg-gradient-light">
        <div class="container text-center">
            <h3 class="text-dark mb-4 fw-bold">Ingin Menyelenggarakan Seminar Bersama Kami?</h3>
            <p class="text-muted mb-4">
                Hubungi tim kami untuk kolaborasi penyelenggaraan seminar atau pelatihan profesi apoteker di daerah
                Anda.
            </p>
            <a href="#" class="btn bg-gradient-info">Hubungi Kami</a>
        </div>
    </section> --}}

</div>
@endsection