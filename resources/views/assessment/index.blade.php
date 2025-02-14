@extends('inc.main')
@section('title', 'Penliaian MBKM')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/datagrid/datatables/datatables.bundle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropify/0.2.2/css/dropify.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
@endsection

@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', [
            'category_1' => 'Master',
        ])

        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'fa-solid fa-check-to-slot',
                'heading1' => 'Penilaian',
                'heading2' => 'MBKM',
            ])
            @endcomponent
        </div>
        
        {{-- NOTED : TAMBAHKAN FILTERING BY KAMPUS atau nama cpl atau sks --}}
        {{-- TINGGAL ngasih nilai ke student dengan cpl ini abis itu testing --}}

        <x-panel.show title="Data Penilaian" subtitle="Silakan lakukan penilaian">
            <x-slot name="paneltoolbar">
                <x-panel.tool-bar>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploaddata">
                            <i class="fa fa-plus"></i> Tambah Data Penilaian
                        </button>
                </x-panel.tool-bar>

            {{-- <!-- Modal Tambah Data -->
            <div class="modal fade" id="uploaddata" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Hasil Penilaian</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('mikroskil.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="id_mahasiswa">Mahasiswa</label>
                                    <select class="form-control select2" name="id_mahasiswa" required>
                                        <option value="" disabled selected>Pilih Mahasiswa</option>
                                        @foreach ($mahasiswa as $mhs)
                                            <option value="{{ $mhs->id }}">{{ $mhs->nim }} - {{ $mhs->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="id_cpl">Penilaian (CPL)</label>
                                    <select class="form-control select2" name="id_cpl" required>
                                        <option value="" disabled selected>Pilih CPL</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah SKS</label>
                                    <input type="number" name="sks" class="form-control" min="1" max="10" required>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
        </x-slot>

            <!-- Tabel Data -->
            <div class="table-responsive">
                <table id="dt-mahasiswa" class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Hasil Capaian</th>
                            <th>Penilaian</th>
                            <th>Jumlah SKS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Baris Dummy 1 -->
                        <tr>
                            <td>2201001</td>
                            <td>Ahmad Saputra</td>
                            <td>
                                <select class="form-control select-multiple" multiple>
                                    <option value="1" selected>Komunikasi Efektif yang membuat mahasisewa pintas sekali danhbat</option>
                                    <option value="2" selected>Pemrograman Web</option>
                                    <option value="3">Data Science</option>
                                </select>
                            </td>
                            <td><input type="number" class="form-control" value="3" min="1" max="10"></td>
                            <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                        <!-- Baris Dummy 2 -->
                        <tr>
                            <td>2201002</td>
                            <td>Budi Santoso</td>
                            <td>
                                <select class="form-control select-multiple" multiple>
                                    <option value="1" selected>Komunikasi Efektif</option>
                                    <option value="2">Pemrograman Web</option>
                                    <option value="3" selected>Data Science</option>
                                </select>
                            </td>
                            <td><input type="number" class="form-control" value="4" min="1" max="10"></td>
                            <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                        <!-- Baris Dummy 3 -->
                        <tr>
                            <td>2201003</td>
                            <td>Citra Lestari</td>
                            <td>
                                <select class="form-control select-multiple" multiple>
                                    <option value="1">Komunikasi Efektif</option>
                                    <option value="2">Pemrograman Web</option>
                                    <option value="3" selected>Data Science</option>
                                </select>
                            </td>
                            <td><input type="number" class="form-control" value="2" min="1" max="10"></td>
                            <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>          
        </x-panel.show>
    </main>
@endsection

@section('pages-script')
    <script src="/admin/js/datagrid/datatables/datatables.bundle.js"></script>
    
    <script>
        $(document).ready(function () {
            // Inisialisasi DataTable
            $('#dt-mahasiswa').DataTable({
                responsive: true,
                searching: true,
                language: {
                    lengthMenu: "Tampilkan _MENU_ data",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                }
            });

            // Update jumlah SKS secara inline
            $(".sks-editable").on("change", function () {
                let id = $(this).data("id");
                let value = $(this).val();

                $.ajax({
                    url: "{{ route('mikroskil.updateInline') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id,
                        sks: value
                    },
                    success: function () {
                        alert("Data berhasil diperbarui!");
                    },
                    error: function () {
                        alert("Terjadi kesalahan saat memperbarui data.");
                    }
                });
            });

            // Hapus data
            $('.delete').on('click', function () {
                let id = $(this).data('id');
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    $.ajax({
                        url: '/mikroskil/delete/' + id,
                        type: 'DELETE',
                        data: { _token: '{{ csrf_token() }}' },
                        success: function () {
                            alert("Data berhasil dihapus!");
                            location.reload();
                        },
                        error: function () {
                            alert("Gagal menghapus data!");
                        }
                    });
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.select-multiple').select2({
                    placeholder: "Pilih Capaian",
                    allowClear: true
                });
            });
        </script>
@endsection
