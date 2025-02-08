@extends('inc.main')
@section('title', 'Profil Master')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Master'])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'user-circle',
                'heading1' => 'Edit Profil',
                'heading2' => 'Admin',
            ])
            @endcomponent
        </div>
        <x-row-column :column="1">
            <x-slot name='column1'>
                <x-panel.show title="Profil" subtitle="{{ auth()->user()->role }}">
                    <form action="{{ route('profil_admin.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row no-gutters row-grid">
                            <div class="col-12">
                                <div class="d-flex flex-column align-items-center justify-content-center p-4">
                                    <!-- Gambar profil berbentuk lingkaran -->
                                    <label for="image" class="position-relative">
                                        <img id="profileImage"
                                            src="{{ auth()->user()->image ? asset('storage/profile/' . auth()->user()->image) : asset('admin/img/users/user.jpg') }}"
                                            class="rounded-circle shadow-2 img-thumbnail transition-transform duration-300 ease-in-out transform hover:scale-125"
                                            style="width: 120px; height: 120px;">
                                        <!-- Icon untuk mengganti gambar -->
                                        <span class="position-absolute" style="bottom: 5px; right: 5px;">
                                            <i class="fas fa-camera" style="font-size: 20px; color: #007bff;"></i>
                                        </span>
                                    </label>

                                    <!-- Input file tersembunyi untuk mengubah gambar -->
                                    <input type="file" id="image" name="image" class="d-none" accept="image/*"
                                        onchange="previewImage(event)">
                                    <h5 class="mb-0 fw-700 text-center mt-3">
                                        <label for="name">Username</label>
                                        <input type="text" name="name" value="{{ auth()->user()->name }}"
                                            class="form-control text-center">
                                    </h5>
                                    <h5 class="text-center fw-700 mt-3 mb-0">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{ auth()->user()->email }}"
                                            class="form-control text-center">
                                    </h5>
                                    @if ($users->dosen != null)
                                        {{-- <div id="dosenFields" style="display: none;"> --}}
                                        <div class="form-group">
                                            <label for="nip">NIP</label>
                                            <input type="number" name="nip"
                                                value="{{ old('nip', $users->dosen->nip) }}" id="nip"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="L" {{ $users->dosen->gender == 'L' ? 'selected' : '' }}>
                                                    Laki-laki
                                                </option>
                                                <option value="P" {{ $users->dosen->gender == 'P' ? 'selected' : '' }}>
                                                    Perempuan
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" id="phone"
                                                value="{{ old('phone', $users->dosen->phone) }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" id="alamat"
                                                value="{{ old('alamat', $users->dosen->address) }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="kampus">Kampus</label>
                                            <input type="text" name="kampus" id="kampus"
                                                value="{{ old('kampus', $users->dosen->kampus) }}" class="form-control">
                                        </div>
                                        {{-- </div> --}}
                                    @elseif($users->mahasiswa != null)
                                        {{-- <div id="mahasiswaFields" style="display: none;"> --}}
                                        <div class="form-group">
                                            <label for="nim">NIM</label>
                                            <input type="number" name="nim" id="nim"
                                                value="{{ old('nim', $users->mahasiswa->nim) }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="L"
                                                    {{ $users->mahasiswa->gender == 'L' ? 'selected' : '' }}>Laki-laki
                                                </option>
                                                <option value="P"
                                                    {{ $users->mahasiswa->gender == 'P' ? 'selected' : '' }}>Perempuan
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" id="phone"
                                                value="{{ old('phone', $users->mahasiswa->phone) }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" id="alamat"
                                                value="{{ old('alamat', $users->mahasiswa->address) }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="kampus">Kampus</label>
                                            <input type="text" name="kampus" id="kampus"
                                                value="{{ old('kampus', $users->mahasiswa->kampus) }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="prodi">Prodi</label>
                                            <input type="text" name="prodi" id="prodi"
                                                value="{{ old('prodi', $users->mahasiswa->prodi) }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="semester">Semester</label>
                                            <input type="text" name="semester" id="semester"
                                                value="{{ old('semester', $users->mahasiswa->semester) }}"
                                                class="form-control">
                                        </div>
                                        {{-- </div> --}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </x-panel.show>
            </x-slot>
        </x-row-column>
    </main>
@endsection

@section('pages-script')
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('profileImage');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

@endsection
