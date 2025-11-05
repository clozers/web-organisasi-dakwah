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
        style="background-image: url('{{ asset('assets_frontend/img/apoteker-3.png') }}'); background-position: center; background-size: cover;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container h-100 d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 text-white">
                    <h1 class="fadeIn2 fadeInBottom fw-bold text-white">Tentang Kami</h1>
                    <p class="lead opacity-9 fadeIn3 fadeInBottom">
                        Serikat Profesi Apoteker Indonesia (SPAI) merupakan wadah resmi bagi para apoteker di seluruh
                        Indonesia yang berkomitmen membangun profesi farmasi yang kompeten, berintegritas, dan berdampak
                        bagi masyarakat.
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
                        <h2 class="text-dark mb-0">History of Serikat Apoteker Indonesia</h2>
                        <p class="text-muted mt-3 p-horizontal">Kami aktif menyelenggarakan berbagai kegiatan
                            pengembangan
                            profesi dan sosial,
                            mulai dari seminar ilmiah, pelatihan kefarmasian, hingga program pengabdian masyarakat. </p>
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
                            <h1 class="text-white">Serikat Apoteker Indonesia</h1>
                            <p class="lead text-white opacity-8 text-justify">
                                Serikat Apoteker Indonesia (SAI) berdiri sebagai wadah perjuangan profesi yang
                                berkomitmen untuk
                                meningkatkan kesejahteraan dan martabat apoteker di seluruh Indonesia.
                                Lahir dari semangat kebersamaan para apoteker pada awal dekade 2000-an,
                                SAI hadir untuk memperjuangkan hak-hak tenaga kefarmasian serta memperkuat peran
                                apoteker
                                dalam sistem kesehatan nasional.
                                Sepanjang perjalanannya, SAI aktif berperan dalam pembinaan profesionalisme,
                                advokasi kebijakan kesehatan, dan peningkatan kompetensi anggota melalui
                                pelatihan, seminar ilmiah, serta kegiatan sosial kemasyarakatan.
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
                                Terbentuk pada awal tahun 2000-an, SAI lahir dari keinginan kuat apoteker
                                untuk memiliki wadah perjuangan yang independen dan profesional.
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
                                SAI kini memiliki jaringan anggota di berbagai daerah,
                                memperkuat kolaborasi dengan institusi pendidikan,
                                pemerintah, dan asosiasi profesi lainnya.
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
            <p class="text-muted mb-5 p-horizontal">Kami menjunjung tinggi nilai-nilai profesionalisme, integritas, dan
                kolaborasi dalam setiap langkah kami membangun dunia kefarmasian yang lebih baik.</p>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <i class="material-symbols-rounded text-gradient text-success text-4xl mb-2">verified</i>
                    <h6 class="fw-bold">Profesionalisme</h6>
                    <p class="small p-horizontal">Setiap anggota dituntut bekerja dengan standar tertinggi dan beretika.
                    </p>
                </div>
                <div class="col-md-3 mb-4">
                    <i class="material-symbols-rounded text-gradient text-success text-4xl mb-2">groups</i>
                    <h6 class="fw-bold">Kolaborasi</h6>
                    <p class="small p-horizontal">Kami percaya kemajuan dicapai melalui kerja sama lintas sektor.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <i class="material-symbols-rounded text-gradient text-success text-4xl mb-2">lightbulb</i>
                    <h6 class="fw-bold">Inovasi</h6>
                    <p class="small p-horizontal">Terus beradaptasi dan mencari solusi baru bagi tantangan dunia
                        kesehatan.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <i class="material-symbols-rounded text-gradient text-success text-4xl mb-2">favorite</i>
                    <h6 class="fw-bold">Kepedulian</h6>
                    <p class="small p-horizontal">Melayani dengan empati, baik kepada anggota maupun masyarakat luas.
                    </p>
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
                            Kami memiliki visi besar untuk menjadikan apoteker Indonesia sebagai garda terdepan dalam
                            pelayanan kesehatan yang berkualitas, berbasis ilmu, dan beretika.
                        </p>

                        <div class="row text-center">
                            <div class="col-md-6 mb-4">
                                <div class="card border-0 shadow-sm h-100 border-radius-xl bg-light">
                                    <div class="card-body">
                                        <i
                                            class="material-symbols-rounded text-gradient text-success text-4xl mb-3">visibility</i>
                                        <h5 class="fw-bold">Visi</h5>
                                        <p class="p-horizontal text-muted">
                                            Menjadi organisasi profesi apoteker yang unggul, mandiri, dan berperan aktif
                                            dalam meningkatkan kualitas hidup masyarakat melalui pelayanan kefarmasian
                                            yang profesional.
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
                                            <li>1. Meningkatkan kompetensi dan profesionalisme apoteker Indonesia.</li>
                                            <li>2. Mendorong inovasi dalam praktik kefarmasian dan pelayanan publik.
                                            </li>
                                            <li>3. Memperkuat solidaritas dan kesejahteraan anggota.</li>
                                            <li>4. Menjalin kerja sama dengan instansi pemerintah dan lembaga kesehatan.
                                            </li>
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