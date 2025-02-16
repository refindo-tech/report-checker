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
        <x-panel.show title="Detail" subtitle="Laporan Akhir">
            <x-slot name="paneltoolbar">
                <x-panel.tool-bar>
                    <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fal fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('report.index') }}">Kembali</a>
                    </div>
                </x-panel.tool-bar>
            </x-slot>
            <x-slot name="tagpanel">
                <div class="flex justify-between items-center p-4 border-b border-gray-200">
                    <!-- Bagian Kiri: Dibuat oleh -->
                    <div class="flex items-center">
                        <p class="text-sm text-gray-600 mr-4">
                            <strong>Ditinjau oleh:</strong> {{ $finalReport->reviewer->name ?? 'Tidak diketahui' }}
                        </p>
                        <p class="text-xs text-gray-500">
                            {{-- <em>{{ $Laporan->created_at ? $Laporan->created_at->format('d M Y, H:i') : '-' }}</em> --}}
                        </p>
                    </div>

                    <!-- Bagian Kanan: Diperbarui oleh -->
                    {{-- @if ($Laporan->updater_id)
                        <div class="flex items-center text-right">
                            <p class="text-sm text-gray-600 mr-4">
                                <strong>Diperbarui oleh:</strong> {{ $Laporan->updater->name ?? 'Tidak diketahui' }}
                            </p>
                            <p class="text-xs text-gray-500">
                                <em>{{ $Laporan->updated_at ? $Laporan->updated_at->format('d M Y, H:i') : '-' }}</em>
                            </p>
                        </div>
                    @endif --}}
                </div>
            </x-slot>
            <div class="card">
                <div class="card-body">
                    <p><strong>Nama Mahasiswa:</strong> {{ $finalReport->user->name }}</p>
                    <p><strong>Berkas: </strong>
                        @if ($finalReport->berkas)
                            <a href="{{ asset('storage/report/' . $finalReport->berkas) }}" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                            </a>
                        @else
                            <span class="text-danger">Belum diisi</span>
                        @endif
                    </p>
                    <p><strong>Tanggapan:</strong>
                        {{-- @if ($finalReport->status == 3 || $finalReport->status == 0) --}}
                        @if ($finalReport->feedback != null)
                            {{ $finalReport->feedback }}
                        @else
                            <span class="text-danger">Tidak ada tanggapan</span>
                        @endif
                        {{-- @endif --}}
                    </p>
                    <p><strong>Total Konversi:</strong>
                        @if ($finalReport->nilai != null)
                            {{ $finalReport->nilai }}
                        @else
                            @if ($finalReport->status == 1 || $finalReport->status == 2)
                                <span class="text-danger">Sedang Proses</span>
                            @elseif($finalReport->status == 3)
                                <span class="text-danger">Belum memenuhi syarat</span>
                            @else
                                <span class="text-danger">Belum diisi</span>
                            @endif
                        @endif
                    </p>
                    <p><strong>status:</strong>
                        @if ($finalReport->status == 1)
                            <span class="badge badge-primary">Waiting</span>
                        @elseif ($finalReport->status == 2)
                            <span class="badge badge-warning">Review</span>
                        @elseif ($finalReport->status == 3)
                            <span class="badge badge-danger">Rejected</span>
                        @else
                            <span class="badge badge-success">Accepted</span>
                        @endif
                    </p>
                    @canany(['edit-laporan-akhir', 'hapus-laporan-akhir'])
                        @can('edit-laporan-akhir')
                            <a href="{{ route('report.edit', $finalReport->id) }}" class="btn btn-primary">Edit</a>
                        @endcan
                        @can('hapus-laporan-akhir')
                            <form action="{{ route('report.destroy', $finalReport->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endcan
                    @endcanany
                    <a href="{{ route('report.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </x-panel.show>
    </main>
@endsection
