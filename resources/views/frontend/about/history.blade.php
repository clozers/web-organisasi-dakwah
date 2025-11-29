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
        <div class="page-header min-vh-75"
            style="background-image: url('{{ asset('assets_frontend/img/logo.jpg') }}'); background-position: center; background-size: cover;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container h-100 d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 text-white">
                        <h1 class="fadeIn2 fadeInBottom fw-bold text-white">Tentang Kami</h1>
                        <p class="lead opacity-9 fadeIn3 fadeInBottom">
                            Dewan Da’wah Risalah Islamiyyah (Sulit Air) adalah lembaga dakwah dan sosial yang berkomitmen
                            memperkuat pemahaman agama, membangun kapasitas umat, serta memberdayakan komunitas setempat
                            melalui program pendidikan, sosial, dan kemitraan yang berkelanjutan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        {{-- SEJARAH ORGANISASI --}}
        <section class="py-5 my-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="row justify-content-center text-center ms-auto me-auto">
                        <div class="col-lg-10">
                            <h2 class="text-dark mb-0">Sejarah Dewan Da’wah Risalah Islamiyyah</h2>
                            <p class="text-muted mt-3 p-horizontal">Kami aktif menyelenggarakan berbagai kegiatan dakwah,
                                pendidikan, dan pemberdayaan masyarakat — dari pengajian, pelatihan kader, hingga program
                                sosial yang berdampak pada kesejahteraan warga Sulit Air.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-sm-5">
                <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl"
                    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');"
                    loading="lazy">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11 ms-lg-5">
                                <h4 class="text-white">Sejarah Singkat</h4>
                                <h1 class="text-white">Dewan Da’wah Risalah Islamiyyah — Sulit Air</h1>
                                <p class="lead text-white opacity-8 text-justify">
                                    Dewan Da’wah Risalah Islamiyyah lahir dari inisiatif tokoh-tokoh masyarakat yang ingin
                                    memperkuat dakwah dan pendidikan agama di wilayah Sulit Air. Berawal dari kegiatan
                                    pengajian dan pengajaran di tingkat lokal, dewasa ini lembaga ini berkembang menjadi
                                    wadah koordinasi program keagamaan, pendidikan, serta kegiatan sosial yang menyentuh
                                    berbagai lapisan masyarakat. Komitmen kami adalah menjadikan dakwah yang moderat,
                                    berwawasan
                                    ilmu pengetahuan, dan kontributif terhadap kesejahteraan sosial.
                                </p>
                                <a href="#" class="text-white icon-move-right">
                                    Pelajari lebih lanjut
                                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-horizontal bg-gradient-dark border-radius-xl d-block d-md-flex p-4">
                            <i class="material-symbols-rounded text-white text-3xl">flag</i>
                            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                                <h5 class="text-white">Awal Berdiri</h5>
                                <p class="text-white p-horizontal">
                                    Berdiri atas dasar keinginan memperkuat kegiatan dakwah dan pendidikan agama di Sulit
                                    Air,
                                    Dewan Da’wah Risalah Islamiyyah tumbuh melalui kolaborasi masyarakat dan tokoh agama
                                    setempat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 px-lg-1 mt-lg-0 mt-4">
                        <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
                            <i class="material-symbols-rounded text-gradient text-dark text-3xl">groups</i>
                            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                                <h5>Perkembangan Organisasi</h5>
                                <p class="p-horizontal">
                                    Kini organisasi memiliki jaringan relawan, mubaligh, dan mitra strategis yang aktif
                                    dalam
                                    pelaksanaan program pendidikan, penguatan ekonomi umat, serta aksi sosial
                                    kemasyarakatan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- NILAI ORGANISASI --}}
        <section class="py-6">
            <div class="container text-center">
                <h2 class="fw-bold mb-4">Nilai Utama Kami</h2>
                <p class="text-muted mb-5 p-horizontal">Kami menjunjung tinggi nilai-nilai keagamaan, akhlak, dan
                    pelayanan sosial dalam setiap langkah dakwah dan program pemberdayaan masyarakat.</p>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <i class="material-symbols-rounded text-gradient text-success text-4xl mb-2">verified</i>
                        <h6 class="fw-bold">Amanah</h6>
                        <p class="small p-horizontal">Menjalankan tugas dakwah dan pengelolaan lembaga dengan penuh tanggung
                            jawab.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <i class="material-symbols-rounded text-gradient text-success text-4xl mb-2">groups</i>
                        <h6 class="fw-bold">Kolaborasi</h6>
                        <p class="small p-horizontal">Bekerja sama dengan komunitas, lembaga keagamaan, dan mitra untuk
                            dampak lebih luas.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <i class="material-symbols-rounded text-gradient text-success text-4xl mb-2">lightbulb</i>
                        <h6 class="fw-bold">Inovasi</h6>
                        <p class="small p-horizontal">Mengembangkan metode dakwah dan program social yang relevan dengan
                            perkembangan zaman.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <i class="material-symbols-rounded text-gradient text-success text-4xl mb-2">favorite</i>
                        <h6 class="fw-bold">Kepedulian</h6>
                        <p class="small p-horizontal">Melakukan aksi sosial yang nyata demi kesejahteraan masyarakat
                            sekitar.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- VISI & MISI --}}
        <section class="py-5 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="bg-dark border-radius-xl shadow-lg p-5 text-center">
                            <h2 class="text-white mb-3 fw-bold">Visi & Misi Kami</h2>
                            <p class="text-white p-horizontal mb-5">
                                Menjadi lembaga dakwah yang mampu membentuk masyarakat yang berilmu, berakhlak, dan
                                sejahtera melalui pendidikan, pemberdayaan, dan kerja sama lintas pemangku kepentingan.
                            </p>

                            <div class="row text-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card border-0 shadow-sm h-100 border-radius-xl bg-light">
                                        <div class="card-body">
                                            <i
                                                class="material-symbols-rounded text-gradient text-success text-4xl mb-3">visibility</i>
                                            <h5 class="fw-bold">Visi</h5>
                                            <p class="p-horizontal text-muted">
                                                Terwujudnya masyarakat Sulit Air yang berakhlak mulia, berilmu, dan mandiri
                                                secara sosial-ekonomi melalui dakwah dan pendidikan yang berkualitas.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="card border-0 shadow-sm h-100 border-radius-xl bg-light">
                                        <div class="card-body">
                                            <i
                                                class="material-symbols-rounded text-gradient text-success text-4xl mb-3 ">flag</i>
                                            <h5 class="fw-bold">Misi</h5>
                                            <ul class="text-muted text-start p-horizontal"
                                                style="list-style: none; padding-left: 0;">
                                                <li>1. Menyelenggarakan program pendidikan agama dan pelatihan kader dakwah.
                                                </li>
                                                <li>2. Menguatkan kegiatan sosial dan pemberdayaan ekonomi masyarakat.</li>
                                                <li>3. Membangun jejaring kemitraan dengan lembaga keagamaan dan pemerintah
                                                    daerah.</li>
                                                <li>4. Menyebarluaskan dakwah yang moderat, ilmiah, dan kontekstual.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end inner row -->
                        </div> <!-- end white box -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
