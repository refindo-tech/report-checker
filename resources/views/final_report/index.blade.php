@extends('inc.main')
@section('title', 'Report')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/datagrid/datatables/datatables.bundle.css">
    <!-- Dropify & Animasi Upload -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropify/0.2.2/css/dropify.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropify/0.2.2/js/dropify.min.js"></script>
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', [
            'category_1' => 'Master',
        ])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'graduation-cap',
                'heading1' => 'Laporan Akhir',
                'heading2' => 'MBKM',
            ])
            @endcomponent
        </div>
        <x-panel.show title="Daftar" subtitle="Laporan Akhir">
            <x-slot name="paneltoolbar">
                @can('tambah-barang-masuk')
                    <x-panel.tool-bar>
                        @if ($reports?->berkas == null || $reports?->status == 3)
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadberkas">
                                Upload Berkas
                            </button>
                        @else
                            <button type="button" class="btn btn-secondary" disabled>
                                Berkas sudah diunggah
                            </button>
                        @endif
                    </x-panel.tool-bar>
                    <!-- Modal -->
                    <div class="modal fade @if ($errors->any()) show @endif" id="uploadberkas" tabindex="-1"
                        role="dialog" aria-labelledby="importdatalabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Upload Berkas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <input class="dropify" name="file" type="file" id="file"
                                                accept=".pdf .doc, .docx" data-show-errors="true" required>
                                        </div>
                                        @error('file')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
            </x-slot>
            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Berkas</th>
                        {{-- @if ($reports->status == 3 || $reports->status == 0)
                            <th>Feedback</th>
                        @endif
                        @if ($reports->status == 0)
                            <th>SKS</th>
                        @endif --}}
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($report as $report)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $report->user->name }}</td>
                            <td>
                                @if ($report->status == 1)
                                    <span class="badge badge-primary">Waiting</span>
                                @elseif ($report->status == 2)
                                    <span class="badge badge-warning">Review</span>
                                @elseif ($report->status == 3)
                                    <span class="badge badge-danger">Rejected</span>
                                @else
                                    <span class="badge badge-success">Accepted</span>
                                @endif
                            </td>
                            <td>
                                @if ($report->berkas)
                                    <a href="{{ asset('storage/report/' . $report->berkas) }}" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
                                    </a>
                                @else
                                    <span class="text-danger">Belum diisi</span>
                                @endif
                            </td>
                            {{-- @if ($report->status == 3 || $report->status == 0)
                                <td>
                                    @if ($report->feedback)
                                        {{ $report->feedback }}
                                    @else
                                        <span class="text-danger">Belum diisi</span>
                                    @endif
                                </td>
                            @endif --}}
                            @if ($report->status == 0)
                                <td>
                                    @if ($report->sks)
                                        {{ $report->sks }}
                                    @else
                                        <span class="text-danger">Belum diisi</span>
                                    @endif
                                </td>
                            @endif
                            {{-- @canany(['edit-komponen', 'hapus-komponen']) --}}
                            <td>
                                <a href="{{ route('report.show', $report->id) }}" class="btn btn-info">Detail</a>

                                {{-- Tombol Edit --}}
                                @can('edit-komponen')
                                    <a href="{{ route('report.edit', $report->id) }}" class="btn btn-warning">Edit</a>
                                @endcan

                                {{-- Tombol Hapus --}}
                                @can('hapus-komponen')
                                    <button type="button" class="btn btn-danger"
                                        onclick="confirmDelete({{ $report->id }})">Hapus</button>
                                @endcan

                                {{-- Form Hapus --}}
                                @can('hapus-komponen')
                                    <form id="delete-form-{{ $report->id }}"
                                        action="{{ route('report.destroy', $report->id) }}" method="POST"
                                        style="display:none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                @endcan
                                <a href="{{ route('report.review', $report->id) }}" class="btn btn-success">review</a>
                            </td>
                            {{-- @endcanany --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-panel.show>
    </main>
@endsection
@section('pages-script')
    <script>
        $(document).ready(function() {
            // Inisialisasi Dropify
            $('.dropify').dropify({
                messages: {
                    'default': 'Seret & Letakkan atau Klik untuk Memilih',
                    'replace': 'Seret & Letakkan atau Klik untuk Mengganti',
                    'remove': 'Hapus',
                    'error': 'Oops, ada kesalahan!'
                }
            });

            // Animasi ketika file dipilih
            $('#file').on('change', function() {
                $(this).closest('.dropify-wrapper').css({
                    'box-shadow': '0px 0px 15px rgba(0, 123, 255, 0.5)',
                    'transition': '0.3s ease-in-out'
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if ($errors->any())
                // Open the modal if there are validation errors
                $('#importdata').modal('show');
            @endif
        });
    </script>
    <script src="/admin/js/datagrid/datatables/datatables.bundle.js"></script>
    <script>
        /* demo scripts for change table color */
        /* change background */
        $(document).ready(function() {
            $('#dt-basic-example').dataTable({
                responsive: true
            });

            $('.js-thead-colors a').on('click', function() {
                var theadColor = $(this).attr("data-bg");
                console.log(theadColor);
                $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
            });

            $('.js-tbody-colors a').on('click', function() {
                var theadColor = $(this).attr("data-bg");
                console.log(theadColor);
                $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
            });

        });
    </script>
@endsection
