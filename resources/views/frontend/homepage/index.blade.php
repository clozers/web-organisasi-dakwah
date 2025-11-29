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
    <header class="header-2 position-relative overflow-hidden">
        <div id="hero-slider" class="position-relative" style="height: 75vh; overflow: hidden;">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner mb-4">
                    <div class="carousel-item active">
                        <div class="page-header min-vh-75" style="background-image: url('assets_frontend/img/logo.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h1 class="text-white fadeIn2 fadeInBottom">Dewan Da’wah Risalah Islamiyyah — Sulit
                                            Air</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">
                                            “Menjadi Institusi Da’wah Risalah Islamiyyah Terkemuka dalam Masyarakat Sulit
                                            Air.”
                                        </p>
                                        <a href="" class="btn bg-gradient-info w-auto me-2">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="page-header min-vh-75"
                            style="background-image: url('assets_frontend/img/logo.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h1 class="text-white fadeIn2 fadeInBottom">Struktur Organisasi</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">
                                            Lihat hierarki kepengurusan dan fungsi kelembagaan kami: Musyawarah Tahunan,
                                            Ketua Umum, Sekretaris, Bendahara, Dakwah / Tabligh, serta Dewan Pakar.
                                        </p>
                                        <a href="" class="btn bg-gradient-info w-auto me-2">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="page-header min-vh-75"
                            style="background-image: url('assets_frontend/img/logo.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h1 class="text-white fadeIn2 fadeInBottom">Program Dakwah & Pengembangan</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">
                                            Melaksanakan kegiatan dakwah, pendidikan, ekonomi, sosial dan budaya yang
                                            berdampak bagi masyarakat Sulit Air.
                                        </p>
                                        <a href="" class="btn bg-gradient-info w-auto me-2">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tombol navigasi -->
                <div class="min-vh-75 position-absolute w-100 top-0">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>

            <!-- Titik indikator -->
            <div id="hero-dots" class="position-absolute start-50 translate-middle-x d-flex gap-2" style="bottom: 90px;">
                <span class="dot rounded-circle bg-white opacity-100" style="width:10px;height:10px;cursor:pointer;"></span>
                <span class="dot rounded-circle bg-white opacity-50" style="width:10px;height:10px;cursor:pointer;"></span>
                <span class="dot rounded-circle bg-white opacity-50" style="width:10px;height:10px;cursor:pointer;"></span>
            </div>
        </div>
    </header>


    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

        <section class="pt-3 pb-4" id="count-stats">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto py-3">
                        <div class="row">
                            @php
                                $total = $totalDonasiApproved ?? 0;
                                $display = 'Rp ' . number_format($total, 0, ',', '.'); // keep numeric formatting (if used)
                            @endphp

                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    {{-- data-raw berisi angka mentah untuk JS --}}
                                    <h1 class="text-gradient text-dark"
                                        style="font-size: 2rem; font-weight: 700; margin-bottom: 4px;">
                                        <span id="state1" data-count="{{ $total }}" data-raw="{{ $total }}"
                                            style="font-size: 2rem;">
                                            {{ $display }}
                                        </span>
                                    </h1>
                                    <h5 class="mt-3">Total Donasi / Dukungan</h5>
                                    <p class="text-sm font-weight-normal text-muted">
                                        Terima kasih—dukungan Anda memperkuat aktivitas dakwah dan program sosial Dewan
                                        Da’wah Risalah Islamiyyah.
                                    </p>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-dark"> <span id="state2" countTo="15">10</span>+</h1>
                                    <h5 class="mt-3">Artikel / Publikasi</h5>
                                    <p class="text-sm font-weight-normal">Terdapat publikasi dan materi dakwah yang membahas
                                        berbagai topik keagamaan dan sosial.</p>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-dark" id="state3" countTo="4">5</h1>
                                    <h5 class="mt-3">Kegiatan</h5>
                                    <p class="text-sm font-weight-normal">Berbagai kegiatan pendidikan, tabligh, dan program
                                        pemberdayaan masyarakat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-12 my-auto">
                        <div class="info-horizontal border-radius-xl d-block d-md-flex p-4 h-100">
                            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                                <h5>Dakwah Dewan Risalah</h5>
                                <p class="p-horizontal">Dewan Da’wah Risalah Islamiyyah aktif menyelenggarakan kegiatan
                                    dalam bidang pendidikan, keagamaan, ekonomi, sosial, dan budaya. Setiap program
                                    dirancang untuk memperkuat kaderisasi da’i, mengembangkan metode dakwah kreatif, serta
                                    memberikan kontribusi nyata bagi masyarakat Sulit Air.</p><br>
                                <a href="#" class="text-dark icon-move-right">
                                    Lihat Selengkapnya
                                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 my-auto">
                        <a href="#">
                            <img class="w-100 border-radius-lg shadow-lg"
                                src="{{ asset('assets_frontend/img/logo.jpg') }}" alt="Dakwah Image">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5 py-5">
            <div class="container">
                <div class="row justify-content-center text-center ms-auto me-auto">
                    <div class="col-lg-10 mb-5">
                        <h2 class="text-dark mb-0">Pimpinan & Tokoh</h2>
                        <p class="text-muted mt-3 p-horizontal">
                            Sosok yang menjadi panutan dan penggerak utama organisasi. Dengan visi yang jelas dan semangat
                            pengabdian tinggi, beliau memimpin Dewan Da’wah Risalah Islamiyyah untuk mewujudkan tujuan
                            dakwah dan pemberdayaan masyarakat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <!-- Foto / kartu pemimpin -->
                    <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                        <div class="rotating-card-container">
                            <div
                                class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
                                <div class="front front-background"
                                    style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-size: cover;">
                                    <div class="card-body py-7 text-center"><br><br>
                                        <h3 class="text-white">Ketua Umum</h3>
                                        <p class="text-white opacity-8 ">Pemimpin yang menginspirasi dengan visi, empati,
                                            dan dedikasi untuk kemajuan dakwah di Sulit Air.</p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                    style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-size: cover;">
                                    <div class="card-body pt-7 text-center">
                                        <h3 class="text-white">Tentang Pemimpin Kami</h3>
                                        <p class="text-white opacity-8" style="text-align: justify;">
                                            Memimpin dengan prinsip kolaborasi, amanah, dan inovasi dalam memperkuat peran
                                            lembaga dakwah di tingkat lokal dan regional.
                                        </p>
                                        <a href="#" class="btn btn-white btn-sm w-50 mx-auto mt-3">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Deskripsi nilai kepemimpinan -->
                    <div class="col-lg-6 ms-auto">
                        <div class="row justify-content-start">
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-symbols-rounded text-gradient text-success text-3xl">groups</i>
                                    <h5 class="font-weight-bolder mt-3">Kaderisasi & Pendidikan</h5>
                                    <p class="pe-5" style="text-align: justify;">Membangun kapasitas da’i dan anggota
                                        melalui pendidikan berkelanjutan.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-symbols-rounded text-gradient text-success text-3xl">verified</i>
                                    <h5 class="font-weight-bolder mt-3">Amanah & Integritas</h5>
                                    <p class="pe-3" style="text-align: justify;">Menjunjung tinggi kejujuran, tanggung
                                        jawab, dan etika dalam penyelenggaraan dakwah.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start mt-5">
                            <div class="col-md-6 mt-3">
                                <i class="material-symbols-rounded text-gradient text-success text-3xl">lightbulb</i>
                                <h5 class="font-weight-bolder mt-3">Inovasi Dakwah</h5>
                                <p class="pe-5" style="text-align: justify;">Mengembangkan konsep dan metode dakwah yang
                                    relevan dengan tantangan masa kini.</p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="info">
                                    <i class="material-symbols-rounded text-gradient text-success text-3xl">handshake</i>
                                    <h5 class="font-weight-bolder mt-3">Kemitraan</h5>
                                    <p class="pe-3" style="text-align: justify;">Membangun sinergi dengan lembaga
                                        pemerintah, yayasan, dan komunitas lokal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-4 py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="row justify-content-center text-center ms-auto me-auto">
                        <div class="col-lg-10">
                            <h2 class="text-dark mb-0">Kegiatan Kami</h2>
                            <p class="text-muted mt-3 p-horizontal">Dewan Da’wah Risalah Islamiyyah menyelenggarakan
                                seminar, pelatihan, tabligh, dan program pemberdayaan sosial untuk meningkatkan kualitas
                                sumber daya dan kesejahteraan masyarakat Sulit Air.</p>
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
                                background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); 
                                background-repeat: no-repeat; 
                                background-position: center; 
                                background-size: contain; 
                                height: 440px; 
                                border-radius: 1rem;">
                                    <div class="card-body py-7 text-center">
                                        <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white">Program Pendidikan</h3>
                                        <p class="text-white opacity-8">Pendidikan kader dan penguatan kapasitas da’i untuk
                                            menjawab kebutuhan lokal.</p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                    style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-size: cover;">
                                    <div class="card-body pt-7 text-center">
                                        <h3 class="text-white">Program Sosial</h3>
                                        <p class="text-white opacity-8">Kegiatan pengabdian masyarakat yang terintegrasi
                                            dengan dakwah.</p>
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
                                background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); 
                                background-repeat: no-repeat; 
                                background-position: center; 
                                background-size: contain; 
                                height: 440px; 
                                border-radius: 1rem;">
                                    <div class="card-body py-7 text-center">
                                        <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white">Kemitraan</h3>
                                        <p class="text-white opacity-8">Sinergi dengan yayasan, MUI, nagari, dan lembaga
                                            lainnya.</p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                    style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-size: cover;">
                                    <div class="card-body pt-7 text-center">
                                        <h3 class="text-white">Kolaborasi</h3>
                                        <p class="text-white opacity-8">Membangun aliansi strategis demi keberlanjutan
                                            program.</p>
                                        <a href="#" target="_blank"
                                            class="btn btn-white btn-sm w-50 mx-auto mt-3">Lihat Mitra</a>
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
                                background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); 
                                background-repeat: no-repeat; 
                                background-position: center; 
                                background-size: contain; 
                                height: 440px; 
                                border-radius: 1rem;">
                                    <div class="card-body py-7 text-center">
                                        <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white">Pengabdian Masyarakat</h3>
                                        <p class="text-white opacity-8">Program-program yang langsung memberi manfaat pada
                                            warga setempat.</p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                    style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-size: cover;">
                                    <div class="card-body pt-7 text-center">
                                        <h3 class="text-white">Implementasi</h3>
                                        <p class="text-white opacity-8">Dari prototipe menuju kegiatan berkelanjutan yang
                                            terukur.</p>
                                        <a href="#" target="_blank"
                                            class="btn btn-white btn-sm w-50 mx-auto mt-3">Ikut Program</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <h2 class="mb-0 font-weight-bolder text-black">Didukung Oleh Komunitas dan Mitra Lokal</h2>
                        <p class="text-muted mt-3 p-horizontal">
                            Dewan Da’wah Risalah Islamiyyah (DDR) bekerja sama dengan berbagai pihak—yayasan, MUI, nagari,
                            dan lembaga kemitraan lainnya—untuk mewujudkan visi dan misi dakwah di Sulit Air.
                        </p>
                    </div>
                </div>

                <div class="row mt-6">
                    <div class="col-lg-4 col-md-8">
                        <div class="card card-plain">
                            <div class="card-body">
                                <div class="author">
                                    <div class="name">
                                        <h6 class="mb-0 font-weight-bolder">Prof. Dr. M. Amin Nurdin</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 2 hari lalu
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">
                                    “Kegiatan pendidikan dan dakwah di organisasi ini memberikan manfaat nyata bagi
                                    penguatan komunitas lokal.”
                                </p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star text-dark"></i>
                                    <i class="fas fa-star text-dark"></i>
                                    <i class="fas fa-star text-dark"></i>
                                    <i class="fas fa-star text-dark"></i>
                                    <i class="fas fa-star text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8 ms-md-auto">
                        <div class="card bg-dark shadow-dark">
                            <div class="card-body text-white">
                                <div class="author align-items-center">
                                    <div class="name">
                                        <h6 class="mb-0 text-white font-weight-bolder">Dr. M. Akhyar Adnan, MA</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 1 minggu lalu
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">
                                    “Melalui sinergi mitra, program dakwah dapat berjalan lebih efektif dan berkelanjutan.”
                                </p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8">
                        <div class="card card-plain">
                            <div class="card-body">
                                <div class="author">
                                    <div class="name">
                                        <h6 class="mb-0 font-weight-bolder">Drs. Prof. Jurnalis Uddin</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 3 minggu lalu
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">
                                    “Kegiatan sosial dan pendidikan di Dewan Risalah menunjukkan komitmen nyata terhadap
                                    perubahan sosial.”
                                </p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star text-dark"></i>
                                    <i class="fas fa-star text-dark"></i>
                                    <i class="fas fa-star text-dark"></i>
                                    <i class="fas fa-star text-dark"></i>
                                    <i class="fas fa-star text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="horizontal dark my-5">

                {{-- placeholder untuk logo mitra (jika ingin ditampilkan, bisa di-uncomment dan ganti asset sesuai mitra) --}}
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const el = document.getElementById('state1');
            if (!el) return;

            // Ambil nilai mentah dari attribute data-count / data-raw
            const end = parseInt(el.getAttribute('data-count') || el.getAttribute('data-raw') || '0', 10) || 0;

            // Jika 0, langsung tampilkan Rp 0
            if (end === 0) {
                el.textContent = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    maximumFractionDigits: 0
                }).format(0);
                return;
            }

            // Simple count-up
            const duration = 1000; // durasi animasi (ms)
            const frameRate = 60; // fps
            const totalFrames = Math.round((duration / 1000) * frameRate);
            let frame = 0;
            const easeOutQuad = t => t * (2 - t);

            const formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                maximumFractionDigits: 0
            });

            const start = 0;
            const animate = () => {
                frame++;
                const progress = easeOutQuad(frame / totalFrames);
                const current = Math.round(start + (end - start) * progress);
                el.textContent = formatter.format(current);

                if (frame < totalFrames) {
                    requestAnimationFrame(animate);
                } else {
                    // pastikan akhir tepat
                    el.textContent = formatter.format(end);
                }
            };

            requestAnimationFrame(animate);
        });
    </script>
@endpush
