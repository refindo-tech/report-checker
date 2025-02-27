@extends('inc.main')
@section('title', 'About')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb')
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'info-circle',
                'heading1' => 'About',
            ])
            @endcomponent
        </div>
        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g shadow-5">
            <h1>
                Simikro
                <h4 class="mb-0">Sistem Informasi Evaluasi Mikroskill</h4>
            </h1>
            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
            </div>
            <p>
                Simikro adalah sebuah sistem digital yang dirancang untuk mempermudah evaluasi capaian microskill dalam program Merdeka Belajar Kampus Merdeka (MBKM). Aplikasi ini menyediakan mekanisme yang transparan dan efisien bagi mahasiswa dan dosen dalam menilai, melacak, serta mengonversi capaian microskill ke dalam Sistem Kredit Semester (SKS).
            </p>
            <p>
                Dengan Simikro, mahasiswa dapat mengakses hasil evaluasi secara real-time, memahami standar penilaian, serta mendapatkan umpan balik dari dosen secara langsung. Di sisi lain, dosen dapat melakukan penilaian dengan lebih sistematis, memanfaatkan format standar, serta mengelola rekapitulasi evaluasi secara otomatis. Simikro bertujuan untuk meningkatkan transparansi, akurasi, dan efisiensi dalam proses evaluasi capaian pembelajaran mahasiswa.
            </p>
        </div>

        {{-- <p class="fs-lg">
            <a href="#" class="fw-500 fs-xl">> Ready to join our dedicated team?</a><br>
            We are always on the lookout to expand and add unique app flavors to SmartAdmin. If you think you can contribute
            and create your very own flavors, get in touch with us or <a href="#" target="_blank">click here to
                learn
                more</a> about our partnership program.
        </p> --}}
    </main>
@endsection
