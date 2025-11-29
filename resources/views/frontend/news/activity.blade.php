@extends('frontend.layouts.app')
@push('css')
    <style>
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
                        <h1 class="fw-bold text-white">Kegiatan Terkini</h1>
                        <p class="text-white-50 mt-3">Informasi kegiatan dakwah, pendidikan, dan pemberdayaan masyarakat oleh
                            Dewan Da’wah Risalah Islamiyyah (Sulit Air).</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <section class="my-4 py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="row justify-content-center text-center ms-auto me-auto">
                        <div class="col-lg-10">
                            <h2 class="text-dark mb-0">Kegiatan Kami</h2>
                            <p class="text-muted mt-3 p-horizontal">Dewan Da’wah Risalah Islamiyyah aktif menyelenggarakan
                                berbagai program dakwah, pendidikan, pelatihan kader, dan aksi sosial untuk meningkatkan
                                kesejahteraan masyarakat Sulit Air.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center mt-3">
                    <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                        <div class="rotating-card-container">
                            <div
                                class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
                                <div class="front front-background"
                                    style=" 
                                background-image: url('{{ asset('assets_frontend/img/logo_spai.png') }}'); 
                                background-repeat: no-repeat; 
                                background-position: center; 
                                background-size: contain; 
                                height: 440px; 
                                border-radius: 1rem;">
                                    <div class="card-body py-7 text-center">
                                        <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white">Program Pendidikan</h3>
                                        <p class="text-white opacity-8">Pelatihan kader, pengajian, dan kelas agama untuk
                                            memperkuat ilmu dan akhlak masyarakat.</p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                    style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-size: cover;">
                                    <div class="card-body pt-7 text-center">
                                        <h3 class="text-white">Pelatihan & Workshop</h3>
                                        <p class="text-white opacity-8">Sesi peningkatan kapasitas bagi mubaligh, relawan,
                                            dan tokoh masyarakat.</p>
                                        <a href="#" target="_blank"
                                            class="btn btn-white btn-sm w-50 mx-auto mt-3">Pelajari Program</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                        <div class="rotating-card-container">
                            <div
                                class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
                                <div class="front front-background"
                                    style=" 
                                background-image: url('{{ asset('assets_frontend/img/logo_spai.png') }}'); 
                                background-repeat: no-repeat; 
                                background-position: center; 
                                background-size: contain; 
                                height: 440px; 
                                border-radius: 1rem;">
                                    <div class="card-body py-7 text-center">
                                        <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white">Pengabdian Masyarakat</h3>
                                        <p class="text-white opacity-8">Program bantuan sosial, pemberdayaan ekonomi, dan
                                            pelayanan umum kepada warga yang membutuhkan.</p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                    style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-size: cover;">
                                    <div class="card-body pt-7 text-center">
                                        <h3 class="text-white">Aksi Sosial</h3>
                                        <p class="text-white opacity-8">Kolaborasi dengan mitra lokal untuk dampak sosial
                                            yang nyata.</p>
                                        <a href="#" target="_blank"
                                            class="btn btn-white btn-sm w-50 mx-auto mt-3">Lihat Aksi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                        <div class="rotating-card-container">
                            <div
                                class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
                                <div class="front front-background"
                                    style=" 
                                background-image: url('{{ asset('assets_frontend/img/logo_spai.png') }}'); 
                                background-repeat: no-repeat; 
                                background-position: center; 
                                background-size: contain; 
                                height: 440px; 
                                border-radius: 1rem;">
                                    <div class="card-body py-7 text-center">
                                        <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white">Kemitraan</h3>
                                        <p class="text-white opacity-8">Sinergi dengan lembaga keagamaan, pemerintah, dan
                                            komunitas untuk memperluas jangkauan program.</p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                    style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-size: cover;">
                                    <div class="card-body pt-7 text-center">
                                        <h3 class="text-white">Kolaborasi</h3>
                                        <p class="text-white opacity-8">Membangun jaringan mitra demi keberlanjutan program
                                            dakwah dan sosial.</p>
                                        <a href="#" target="_blank"
                                            class="btn btn-white btn-sm w-50 mx-auto mt-3">Lihat Mitra</a>
                                    </div>
                                </div>
                            </div>
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
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector('#carouselExampleControls');
            const dots = document.querySelectorAll('#hero-dots .dot');

            // Aktifkan carousel otomatis
            const bsCarousel = new bootstrap.Carousel(carousel, {
                interval: 4000,
                ride: 'carousel',
                pause: false, // biar tidak berhenti saat mouse hover
                wrap: true // biar berputar terus
            });

            // Update titik saat slide berubah
            carousel.addEventListener('slide.bs.carousel', function(event) {
                dots.forEach((dot, i) => {
                    dot.style.opacity = i === event.to ? "1" : "0.5";
                });
            });

            // Klik titik untuk pindah slide
            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => bsCarousel.to(i));
            });
        });
    </script>
@endpush
