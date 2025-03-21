@extends('inc.main')
@section('title', 'Project Structure')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/json-path-picker/json-path-picker.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Documentation'])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'book',
                'heading1' => 'Documentation:',
                'heading2' => 'Project Structure',
                'pagedescription' => 'Product documentation, plugin reference, and online help',
            ])
            @endcomponent
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <div class="alert alert-primary alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fal fa-times"></i>
                        </span>
                    </button>
                    <div class="d-flex flex-start w-100">
                        <div class="mr-2 hidden-sm-down">
                            <span class="icon-stack icon-stack-lg">
                                <i class="base-14 icon-stack-3x color-primary-400"></i>
                                <i class="base-14 icon-stack-2x color-primary-600 opacity-70"></i>
                                <i class="fal fa-cog icon-stack-1x text-white opacity-90"></i>
                            </span>
                        </div>
                        <div class="d-flex flex-fill">
                            <div class="flex-fill">
                                <span class="h5">Heads Up</span>
                                <br>
                                Below is a full example of the project files, you may click on the directory to expand and
                                see the full structure of the project files. The 'dist' directory, though isn't mentioned
                                below, will be included in your downloaded package for the HTML Edition.
                            </div>
                        </div>
                    </div>
                </div>
                <pre id="json-renderer" class="json-tree"></pre>
                <input class="path d-none" type="text">
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    <script src="/admin/js/json-path-picker/json-path-picker.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            const $pathTarget = document.querySelectorAll('.path');
            const $source = document.querySelector('#json-renderer');
            const filename = "/admin/media/data/project-structure";
            const defaultOpts = {
                pathNotation: 'dots',
                pathQuotesType: 'single',
                processKeys: false,
                outputCollapsed: true
            };

            $.getJSON(filename + ".json").then(function(data) {
                let jsonData = null;
                jsonData = JSON.parse(JSON.stringify(data))
                JPPicker.render($source, jsonData, $pathTarget, defaultOpts);
            }).fail(function() {
                console.log("failed");
            });
        });
    </script>
@endsection
