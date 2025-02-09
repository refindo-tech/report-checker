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
                        <div class="row">
                            <div class="col-md-12 text-center mb-4">
                                <label for="image" class="position-relative d-inline-block">
                                    <img id="profileImage" 
                                        src="{{ auth()->user()->image ? asset('storage/profile/' . auth()->user()->image) : asset('admin/img/users/user.jpg') }}" 
                                        class="rounded-circle shadow img-thumbnail" 
                                        style="width: 120px; height: 120px;">
                                    <span class="position-absolute" style="bottom: 5px; right: 5px;">
                                        <i class="fas fa-camera text-primary" style="font-size: 20px;"></i>
                                    </span>
                                </label>
                                <input type="file" id="image" name="image" class="d-none" accept="image/*" onchange="previewImage(event)">
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control">
                                </div>
                            </div>
                            
                            @if ($users->dosen != null)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="number" name="nip" value="{{ old('nip', $users->dosen->nip) }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="L" {{ $users->dosen->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="P" {{ $users->dosen->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" value="{{ old('phone', $users->dosen->phone) }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" value="{{ old('alamat', $users->dosen->address) }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kampus">Kampus</label>
                                        <input type="text" name="kampus" value="{{ old('kampus', $users->dosen->kampus) }}" class="form-control">
                                    </div>
                                </div>
                                {{-- MAHASISWA --}}
                            @elseif($users->mahasiswa != null)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nim">NIM</label>
                                        <input type="number" name="nim" value="{{ old('nim', $users->mahasiswa->nim) }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="L" {{ $users->mahasiswa->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="P" {{ $users->mahasiswa->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prodi">Prodi</label>
                                        <input type="text" name="prodi" value="{{ old('prodi', $users->mahasiswa->prodi) }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="semester">Semester</label>
                                        <input type="text" name="semester" value="{{ old('semester', $users->mahasiswa->semester) }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kampus">Kampus</label>
                                        <input type="text" name="kampus" value="{{ old('kampus', $users->mahasiswa->kampus) }}" class="form-control">
                                    </div>
                                </div>
                            @endif
                            
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </x-panel.show>
            </x-slot>
        </x-row-column>

        {{-- Sunting Password --}}
        <x-row-column :column="1">
            <x-slot name='column1'>
                <x-panel.show title="Ubah Password" subtitle="{{ auth()->user()->role }}">
                    <form id="changePasswordForm" action="#" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="current_password">Password Lama</label>
                                    <input type="password" name="current_password" id="current_password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="new_password">Password Baru</label>
                                    <input type="password" name="new_password" id="new_password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="new_password_confirmation">Konfirmasi Password Baru</label>
                                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
                                    <small id="passwordError" class="text-danger d-none">Password baru tidak cocok!</small>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </x-panel.show>
            </x-slot>
        </x-row-column>

        {{-- JavaScript Validation password --}}
        <script>
            document.getElementById('changePasswordForm').addEventListener('submit', function(event) {
                let newPassword = document.getElementById('new_password').value;
                let confirmPassword = document.getElementById('new_password_confirmation').value;
                let errorText = document.getElementById('passwordError');

                if (newPassword !== confirmPassword) {
                    errorText.classList.remove('d-none'); // Menampilkan pesan error
                    event.preventDefault(); // Mencegah pengiriman formulir
                } else {
                    errorText.classList.add('d-none'); // Sembunyikan pesan error jika valid
                }
            });
        </script>
        
        
        <script>
            function previewImage(event) {
                const reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('profileImage').src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
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
