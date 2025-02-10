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
                'icon' => 'fa-solid fa-check-to-slot',
                'heading1' => 'Rubrik CPL',
                'heading2' => 'Mikroskil',
            ])
            @endcomponent
        </div>

        <x-panel.show title="Rubrik" subtitle="Mikroskill">

        
            <x-slot name="paneltoolbar">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <!-- Button Upload -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadberkas">
                        <i class="fa fa-upload"></i> Upload Rubrik CPL
                    </button>
                </div>
            </x-slot>
        
        
            <!-- Tabel -->
            <div class="table-responsive">
                <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Rubrik CPL</th>
                            <th>SKS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data akan diisi di sini -->
                    </tbody>
                </table>
            </div>
        </x-panel.show>        
    </main>
@endsection

@section('pages-script')
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
                responsive: true,
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