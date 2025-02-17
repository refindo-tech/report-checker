@extends('inc.main_auth')
@section('title', 'Welcome')
@section('pages-css')
    {{-- <link rel="stylesheet" media="screen, print" href="/admin/css/fa-brands.css"> --}}
    <style>
        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .logo-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
@section('pages-content')
    @component('inc._auth_header')
        <a href="{{ route('login') }}" class="btn btn-primary text-white ml-auto">
            Login
        </a>
    @endcomponent
    <div class="flex-1"
        style="background: url(/admin/img/svg/pattern-3.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
            <div class="row">
                <div class="col col-md-6 col-lg-7">
                    <h2 class="fs-xxl fw-500 mt-4 text-white">
                        MIKROSKILL LAPORAN AKHIR MBKM
                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                            Aplikasi ini dirancang untuk proses penilaian laporan MBKM sesuai dengan capaian Mikroskill
                        </small>
                    </h2>
                    <p class="text-white opacity-50">Evaluasi laporan MBKM berdasarkan capaian dan kriteria yang telah ditetapkan</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto hidden-sm-down">
                    <div class="py-4 logo-container">
                        <img src="/admin/img/AA/twh.png" alt="Logo MBKM">
                    </div>
                </div>
            </div>
            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                {{ $profileApp->app_tahun ?? '' }} - @php echo date('Y'); @endphp © {{ $profileApp->app_pengembang ?? '' }}
                &nbsp;
            </div>
        </div>
    </div>
@endsection
