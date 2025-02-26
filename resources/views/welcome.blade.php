@extends('inc.main_auth')
@section('title', 'Welcome')
@section('pages-css')
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            margin-top: -50px;
            margin-bottom: 50px;
            animation: fadeIn 1.5s ease-in-out;
        }
        .logo-container img {
            max-width: 30%;
            height: auto;
        }
        .hero-section {
            text-align: center;
            padding: 50px 20px;
        }
        .hero-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }
        .hero-section p {
            font-size: 1.2rem;
            opacity: 0.8;
        }
        .btn-primary {
            background: #ff6f61;
            border: none;
            padding: 12px 24px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: #e63946;
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
@endsection
@section('pages-content')
    @component('inc._auth_header')
        <a href="{{ route('login') }}" class="btn btn-primary text-white ml-auto">
            Login
        </a>
    @endcomponent
    <div class="flex-1 hero-section">
        <h2>Simikro</h2>
        <p>Simikro adalah sebuah sistem digital yang dirancang untuk mempermudah evaluasi capaian microskill dalam program Merdeka Belajar Kampus Merdeka (MBKM). Aplikasi ini menyediakan mekanisme yang transparan dan efisien bagi mahasiswa dan dosen dalam menilai, melacak, serta mengonversi capaian microskill ke dalam Sistem Kredit Semester (SKS).</p>
        <p>Dengan Simikro, mahasiswa dapat mengakses hasil evaluasi secara real-time, memahami standar penilaian, serta mendapatkan umpan balik dari dosen secara langsung. Di sisi lain, dosen dapat melakukan penilaian dengan lebih sistematis, memanfaatkan format standar, serta mengelola rekapitulasi evaluasi secara otomatis. Simikro bertujuan untuk meningkatkan transparansi, akurasi, dan efisiensi dalam proses evaluasi capaian pembelajaran mahasiswa.</p>
    </div>
    <div class="logo-container">
        <img src="/admin/img/AA/twh.png" alt="Logo MBKM">
    </div>
    <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
        {{ $profileApp->app_tahun ?? '' }} - @php echo date('Y'); @endphp © {{ $profileApp->app_pengembang ?? '' }}
    </div>
@endsection
