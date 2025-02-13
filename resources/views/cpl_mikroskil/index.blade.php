@extends('inc.main')
@section('title', 'Rubrik Mikroskil')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/datagrid/datatables/datatables.bundle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropify/0.2.2/css/dropify.min.css">
@endsection

@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', [
            'category_1' => 'Master',
        ])

        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'fa-solid fa-list-check',
                'heading1' => 'Rubrik CPL',
                'heading2' => 'Mikroskil',
            ])
            @endcomponent
        </div>
        {{-- NOTED : TAMBAHKAN FILTERING BY KAMPUS atau nama cpl atau sks --}}
        {{-- TINGGAL ngasih nilai ke student dengan cpl ini abis itu testing --}}

        <x-panel.show title="Rubrik" subtitle="Mikroskill">
            <x-slot name="paneltoolbar">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <!-- Button Upload -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploaddata">
                        <i class="fa fa-plus"></i> Tambah Data Rubrik
                    </button>
                </div>
                <!-- Modal Large -->
                <div class="modal fade @if ($errors->any()) show @endif" id="uploaddata" tabindex="-1"
                    role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Capaian Target</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('mikroskil.store') }}" method="POST" enctype="multipart/form-data"
                                    id="form-input">
                                    @csrf
                                    @if ($kampus)
                                        <div class="form-group">
                                            <label for="kampus">Kampus</label>
                                            <select class="select2 form-control w-100" id="single-default" name="id_kampus"
                                                id="id_kampus" required>
                                                <option value="" selected disabled>Pilih Kampus</option>
                                                @foreach ($kampus as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_kampus')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    @endif

                                    <!-- Table -->
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Capaian Target</th>
                                                <th>SKS</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="input-container">
                                            <tr>
                                                <td>
                                                    <textarea class="form-control" name="rubrik[]" maxlength="150" required></textarea>
                                                </td>
                                                <td>
                                                    <input type="number" name="sks[]" class="form-control" required
                                                        min="1" max="10">
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-danger remove-field"><i
                                                            class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- Tombol Tambah Data & Reset -->
                                    <button type="button" class="btn btn-success" id="add-field">Tambah Data</button>
                                    <button type="button" class="btn btn-danger" id="reset-field">Reset</button>

                                    <div class="modal-footer mt-3">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>


            <!-- Tabel -->
            <h3>Data CPL Mikroskil (Edit Langsung)</h3>
            <table id="dt-basic-example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kampus</th>
                        <th>Rubrik CPL</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mikroskill as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if ($kampus)
                                    <div class="form-group">
                                        <select class="select2 form-control w-100" id="single-default" name="id_kampus"
                                            id="id_kampus" required>
                                            <option value="" selected disabled>Pilih Kampus</option>
                                            @foreach ($kampus as $text)
                                                <option value="{{ $text->id }}"
                                                    {{ old('id_kampus', $item->id_kampus ?? '') == $text->id ? 'selected' : '' }}>
                                                    {{ $text->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_kampus')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                @endif
                            </td>
                            <td>
                                <input type="text" class="form-control editable" data-id="{{ $item->id }}"
                                    data-column="name" value="{{ $item->name }}">
                            </td>
                            <td>
                                <input type="number" class="form-control editable" data-id="{{ $item->id }}"
                                    data-column="sks" value="{{ $item->sks }}">
                            </td>
                            <td><button class="btn btn-danger delete" data-id="{{ $item->id }}">
                                    <i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-panel.show>
    </main>
@endsection

@section('pages-script')
    <script src="/admin/js/datagrid/datatables/datatables.bundle.js"></script>
    <script>
        /* demo scripts for change table color */
        /* change background */
        $(document).ready(function() {
            $('#dt-basic-example').dataTable({
                responsive: true,
                searching: true,
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById("input-container");
            const addButton = document.getElementById("add-field");
            const resetButton = document.getElementById("reset-field");

            // Fungsi Tambah Baris Baru
            addButton.addEventListener("click", function() {
                const newRow = document.createElement("tr");
                newRow.innerHTML = `
                    <td>
                        <textarea class="form-control" name="rubrik[]" maxlength="150" required></textarea>
                    </td>
                    <td>
                        <input type="number" name="sks[]" class="form-control" required min="1" max="10">
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger remove-field"><i class="fa fa-trash"></i></button>
                    </td>
                `;
                container.appendChild(newRow);
            });

            // Fungsi Hapus Baris Tertentu
            container.addEventListener("click", function(event) {
                if (event.target.classList.contains("remove-field")) {
                    event.target.closest("tr").remove();
                }
            });

            // Fungsi Reset Semua Baris
            resetButton.addEventListener("click", function() {
                container.innerHTML = `
                    <tr>
                        <td>
                            <textarea class="form-control" name="rubrik[]" maxlength="150" required></textarea>
                        </td>
                        <td>
                            <input type="number" name="sks[]" class="form-control" required min="1" max="10">
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger remove-field"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                `;
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".editable").on("change", function() {
                let id = $(this).data("id");
                let column = $(this).data("column");
                let value = $(this).val();

                $.ajax({
                    url: "{{ route('mikroskil.updateInline') }}", // Sesuaikan dengan rute update
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id,
                        column: column,
                        value: value
                    },
                    success: function(response) {
                        alert("Data berhasil diperbarui!");
                    },
                    error: function() {
                        alert("Terjadi kesalahan saat memperbarui data.");
                    }
                });
            });

            // Event untuk delete data
            $('.delete').on('click', function() {
                let id = $(this).data('id');
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    $.ajax({
                        url: '/mikroskil/delete/' + id,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert(response.message);
                            location.reload(); // Refresh halaman
                        },
                        error: function(xhr) {
                            alert("Gagal menghapus data!");
                        }
                    });
                }
            });
        });
    </script>


@endsection
