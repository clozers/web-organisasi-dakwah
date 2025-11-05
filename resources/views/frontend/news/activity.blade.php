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
        style="background-image: url('{{ asset('assets_frontend/img/apoteker-2.png') }}'); background-position: center; background-size: cover;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container h-100 d-flex align-items-center">
            <div class="row">
                <div class="col-lg-11 text-white">
                    <h1 class="fw-bold text-white">Kegiatan Terkini</h1>
                    <p class="text-white-50 mt-3">Informasi seputar dunia kefarmasian dan kegiatan Serikat Apoteker
                        Indonesia
                    </p>
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
                        <h2 class="text-dark mb-0">Our Activities</h2>
                        <p class="text-muted mt-3 p-horizontal">Kami aktif menyelenggarakan berbagai kegiatan
                            pengembangan
                            profesi dan sosial,
                            mulai dari seminar ilmiah, pelatihan kefarmasian, hingga program pengabdian masyarakat. </p>
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
                            <div class="front front-background" style=" 
                                background-image: url('{{ asset('assets_frontend/img/logo_spai.png') }}'); 
                                background-repeat: no-repeat; 
                                background-position: center; 
                                background-size: contain; 
                                height: 440px; 
                                border-radius: 1rem;">
                                <div class="card-body py-7 text-center">
                                    <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Feel the <br /> Material Kit</h3>
                                    <p class="text-white opacity-8">All the Bootstrap components that you need in a
                                        development have been re-design with the new look.</p>
                                </div>
                            </div>
                            <div class="back back-background"
                                style="background-image: url('{{ asset('assets_frontend/img/apoteker-5.png') }}'); background-size: cover;">
                                <div class="card-body pt-7 text-center">
                                    <h3 class="text-white">Discover More</h3>
                                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping
                                        to full-functional code because all elements are implemented.</p>
                                    <a href=".//sections/page-sections/hero-sections.html" target="_blank"
                                        class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                    <div class="rotating-card-container">
                        <div
                            class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
                            <div class="front front-background" style=" 
                                background-image: url('{{ asset('assets_frontend/img/logo_spai.png') }}'); 
                                background-repeat: no-repeat; 
                                background-position: center; 
                                background-size: contain; 
                                height: 440px; 
                                border-radius: 1rem;">
                                <div class="card-body py-7 text-center">
                                    <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Feel the <br /> Material Kit</h3>
                                    <p class="text-white opacity-8">All the Bootstrap components that you need in a
                                        development have been re-design with the new look.</p>
                                </div>
                            </div>
                            <div class="back back-background"
                                style="background-image: url('{{ asset('assets_frontend/img/apoteker-5.png') }}'); background-size: cover;">
                                <div class="card-body pt-7 text-center">
                                    <h3 class="text-white">Discover More</h3>
                                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping
                                        to full-functional code because all elements are implemented.</p>
                                    <a href=".//sections/page-sections/hero-sections.html" target="_blank"
                                        class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                    <div class="rotating-card-container">
                        <div
                            class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
                            <div class="front front-background" style=" 
                                background-image: url('{{ asset('assets_frontend/img/logo_spai.png') }}'); 
                                background-repeat: no-repeat; 
                                background-position: center; 
                                background-size: contain; 
                                height: 440px; 
                                border-radius: 1rem;">
                                <div class="card-body py-7 text-center">
                                    <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Feel the <br /> Material Kit</h3>
                                    <p class="text-white opacity-8">All the Bootstrap components that you need in a
                                        development have been re-design with the new look.</p>
                                </div>
                            </div>
                            <div class="back back-background"
                                style="background-image: url('{{ asset('assets_frontend/img/apoteker-5.png') }}'); background-size: cover;">
                                <div class="card-body pt-7 text-center">
                                    <h3 class="text-white">Discover More</h3>
                                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping
                                        to full-functional code because all elements are implemented.</p>
                                    <a href=".//sections/page-sections/hero-sections.html" target="_blank"
                                        class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
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
    document.addEventListener("DOMContentLoaded", function () {
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
    carousel.addEventListener('slide.bs.carousel', function (event) {
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