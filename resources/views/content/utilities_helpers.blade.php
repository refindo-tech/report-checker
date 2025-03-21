@extends('inc.main')
@section('title', 'Helpers')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Utilities'])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'bolt',
                'heading1' => 'Helpers',
                'pagedescription' => 'helpers description',
            ])
            @endcomponent
        </div>
        <div class="input-group input-group-lg mb-3">
            <input type="text" class="form-control shadow-inset-2" id="helper-filter-input"
                aria-label="type 2 or more letters" placeholder="Search for helpers">
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fal fa-search"></i>
                </span>
            </div>
        </div>
        <div id="helper-filter-list">
            <div class="row">
                <div class="col-xl-6">
                    <div id="panel-0" class="panel">
                        <div class="panel-hdr">
                            <h2 data-filter-tags="position absolute z-index">
                                Row <span class="fw-300"><i>grids</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    Add borders to your columns by adding <code>.row-grid</code> to any <code>.row</code>,
                                    make sure to include <code>.no-gutters</code> modifer
                                </div>
                                <div class="border-faded">
                                    <div class="row row-grid no-gutters">
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                        <div class="col-sm-3 p-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="panel-1" class="panel">
                        <div class="panel-hdr">
                            <h2 data-filter-tags="row grid border">
                                Position <span class="fw-300"><i>and z-index</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    Control position with the codes <code>pos-left</code>, <code>pos-right</code>,
                                    <code>pos-top</code>, <code>pos-botom</code>; you can also control z-index values, which
                                    has 3 generic settings, going from higest value to lowest: <code>z-index-space</code>,
                                    <code>z-index-cloud</code>, <code>z-index-ground</code>, <code>z-index-water</code>
                                </div>
                                <div class="border border-primary p-3">
                                    <div class="position-relative height-sm w-100">
                                        <div
                                            class="d-block position-absolute pos-top pos-left p-2 bg-primary-400 rounded-pill">
                                            pos-top pos-left</div>
                                        <div
                                            class="d-block position-absolute pos-top pos-right p-2 bg-primary-500 rounded-pill">
                                            pos-top pos-right</div>
                                        <div
                                            class="d-block position-absolute pos-bottom pos-left p-2 bg-primary-600 rounded-pill">
                                            pos-bottom pos-left</div>
                                        <div
                                            class="d-block position-absolute pos-bottom pos-right p-2 bg-primary-700 rounded-pill">
                                            pos-bottom pos-right</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="panel-2" class="panel">
                        <div class="panel-hdr">
                            <h2 data-filter-tags="demo window">
                                Demo <span class="fw-300"><i>window</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    Use demo window wrapper <code>.demo-window</code> to portray a focal point for images,
                                    demo objects, data, tables or layout properties. Place content inside
                                    <code>.demo-window-content</code>
                                </div>
                                <div class="demo-window rounded height-sm">
                                    <div class="demo-window-content p-3">
                                        <div class="alert alert-info">
                                            You can place any html objects in here.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="panel-3" class="panel">
                        <div class="panel-hdr">
                            <h2 data-filter-tags="opacity opacity- presets">
                                Opacity <span class="fw-300"><i>presets</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    Uniform widths to keep things aligned. See <code>helpers.scss</code> file for more
                                    details. You can also set <code>.width-0</code> to remove any given width, or you can
                                    use <code>.w-auto</code> to undo explicitly specified widths
                                </div>
                                <div class="form-group mb-2">
                                    <label class="form-label" for="js_opacity_range">Select range</label>
                                    <input class="form-control unstyled" id="js_opacity_range" type="range"
                                        name="range" min="5" max="100" step="5" value="5">
                                </div>
                                <div class="mb-g">
                                    <div class="fw-500 mb-2">
                                        Class
                                    </div>
                                    <div>
                                        <code id="js_opacity_class">.opacity-5</code>
                                    </div>
                                </div>
                                <div>
                                    <div class="fw-500 mb-2">
                                        Example
                                    </div>
                                    <img src="img/demo/ng.jpg" class="rounded-circle width-3 h-auto opacity-5"
                                        id="js_opacity" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="panel-5" class="panel">
                        <div class="panel-hdr">
                            <h2 data-filter-tags="hover background">
                                Hover <span class="fw-300"><i>background</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    Hover any background with <code>.hover-bg</code>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-xl-4">
                                        <div class="rounded mb-g border border-faded bg-primary-500 color-fusion-300">
                                            <div class="p-3 hover-bg rounded">
                                                <strong>Parent class</strong>
                                                <p>
                                                    <code>bg-primary-500 color-fusion-300</code>
                                                </p>
                                                <strong>Child class</strong>
                                                <p>
                                                    <code>
                                                        hover-bg
                                                    </code>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-xl-4">
                                        <div class="rounded mb-g border border-faded bg-info-500 color-fusion-300">
                                            <div class="p-3 hover-bg rounded">
                                                <strong>Parent class</strong>
                                                <p>
                                                    <code>bg-info-500 color-fusion-300</code>
                                                </p>
                                                <strong>Child class</strong>
                                                <p>
                                                    <code>
                                                        hover-bg
                                                    </code>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-xl-4">
                                        <div class="rounded mb-g border border-faded bg-warning-500 color-fusion-300">
                                            <div class="p-3 hover-bg rounded">
                                                <strong>Parent class</strong>
                                                <p>
                                                    <code>bg-warning-500 color-fusion-300</code>
                                                </p>
                                                <strong>Child class</strong>
                                                <p>
                                                    <code>
                                                        hover-bg
                                                    </code>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-xl-4">
                                        <div class="rounded mb-g border border-faded bg-success-500 color-fusion-300">
                                            <div class="p-3 hover-bg rounded">
                                                <strong>Parent class</strong>
                                                <p>
                                                    <code>bg-success-500 color-fusion-300</code>
                                                </p>
                                                <strong>Child class</strong>
                                                <p>
                                                    <code>
                                                        hover-bg
                                                    </code>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-xl-4">
                                        <div class="rounded mb-g border border-faded bg-danger-500 color-fusion-300">
                                            <div class="p-3 hover-bg rounded">
                                                <strong>Parent class</strong>
                                                <p>
                                                    <code>bg-danger-500 color-fusion-300</code>
                                                </p>
                                                <strong>Child class</strong>
                                                <p>
                                                    <code>
                                                        hover-bg
                                                    </code>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-xl-4">
                                        <div class="rounded mb-g border border-faded bg-fusion-500 color-fusion-300">
                                            <div class="p-3 hover-bg rounded">
                                                <strong>Parent class</strong>
                                                <p>
                                                    <code>bg-fusion-500 color-white</code>
                                                </p>
                                                <strong>Child class</strong>
                                                <p>
                                                    <code>
                                                        hover-bg
                                                    </code>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="panel-7" class="panel">
                        <div class="panel-hdr">
                            <h2 data-filter-tags="cursor pointer mouse">
                                Cursor <span class="fw-300"><i>pointers</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    Change your cursor pointer with these classes
                                </div>
                                <div class="demo">
                                    <div class="btn bg-faded cursor-auto">
                                        cursor-auto
                                    </div>
                                    <div class="btn bg-faded cursor-crosshair">
                                        cursor-crosshair
                                    </div>
                                    <div class="btn bg-faded cursor-default">
                                        cursor-default
                                    </div>
                                    <div class="btn bg-faded cursor-e-resize">
                                        cursor-e-resize
                                    </div>
                                    <div class="btn bg-faded cursor-help">
                                        cursor-help
                                    </div>
                                    <div class="btn bg-faded cursor-move">
                                        cursor-move
                                    </div>
                                    <div class="btn bg-faded cursor-n-resize">
                                        cursor-n-resize
                                    </div>
                                    <div class="btn bg-faded cursor-ne-resize">
                                        cursor-ne-resize
                                    </div>
                                    <div class="btn bg-faded cursor-nw-resize">
                                        cursor-nw-resize
                                    </div>
                                    <div class="btn bg-faded cursor-pointer">
                                        cursor-pointer
                                    </div>
                                    <div class="btn bg-faded cursor-progress">
                                        cursor-progress
                                    </div>
                                    <div class="btn bg-faded cursor-s-resize">
                                        cursor-s-resize
                                    </div>
                                    <div class="btn bg-faded cursor-se-resize">
                                        cursor-se-resize
                                    </div>
                                    <div class="btn bg-faded cursor-sw-resize">
                                        cursor-sw-resize
                                    </div>
                                    <div class="btn bg-faded cursor-text">
                                        cursor-text
                                    </div>
                                    <div class="btn bg-faded cursor-w-resize">
                                        cursor-w-resize
                                    </div>
                                    <div class="btn bg-faded cursor-wait">
                                        cursor-wait
                                    </div>
                                    <div class="btn cursor-inherit">
                                        cursor-inherit
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div id="panel-4a" class="panel">
                        <div class="panel-hdr">
                            <h2 data-filter-tags="shadow shadow- inset presets">
                                Shadow <span class="fw-300"><i>Presets</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    Add shadow presets for depth on elements
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-none bg-light mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-none</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-1 mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-1</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-2 mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-2</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-3 mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-3</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-4 mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-4</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-5 mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-5</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-sm mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-sm</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-lg mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-lg</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-inset-1 mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-inset-1</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-inset-2 mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-inset-2</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-inset-3 mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-inset-3</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-inset-4 mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-inset-4</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded shadow-inset-5 mb-g border border-faded">
                                            <strong>Class</strong>
                                            <p><code>.shadow-inset-5</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="panel-4" class="panel">
                        <div class="panel-hdr">
                            <h2 data-filter-tags="shadow shadow- inset presets">
                                Shadow <span class="fw-300"><i>Hovers</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    a
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded mb-g border border-faded shadow-hover-1 bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover-1</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded mb-g border border-faded shadow-hover-2 bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover-2</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded mb-g border border-faded shadow-hover-3 bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover-3</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded mb-g border border-faded shadow-hover-4 bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover-4</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded mb-g border border-faded shadow-hover-5 bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover-5</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded mb-g border border-faded shadow-sm-hover bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-sm-hover</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded mb-g border border-faded shadow-hover bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="p-3 rounded mb-g border border-faded shadow-lg-hover bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-lg-hover</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div
                                            class="p-3 rounded mb-g border border-faded shadow-hover-inset-1 bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover-inset-1</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div
                                            class="p-3 rounded mb-g border border-faded shadow-hover-inset-2 bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover-inset-2</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div
                                            class="p-3 rounded mb-g border border-faded shadow-hover-inset-3 bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover-inset-3</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div
                                            class="p-3 rounded mb-g border border-faded shadow-hover-inset-4 bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover-inset-4</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div
                                            class="p-3 rounded mb-g border border-faded shadow-hover-inset-5 bg-highlight">
                                            <strong>Class</strong>
                                            <p><code>.shadow-hover-inset-5</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="panel-6" class="panel">
                        <div class="panel-hdr">
                            <h2 data-filter-tags="child hover">
                                Child <span class="fw-300"><i>Hover</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    Hide and display child elements on hover
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="p-3 hide-child-on-hover height-10 border border-warning rounded bg-warning-200"
                                            style="height:7rem">
                                            Children is hidden on hover <code class="ml-2">.hide-child-on-hover</code>
                                            <div
                                                class="hide-on-hover-parent mt-3 border border-info p-2 bg-info-500 rounded align-items-center">
                                                This element is visible <code class="ml-2">.hide-on-hover-parent</code>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-3 show-child-on-hover border border-warning rounded bg-warning-200"
                                            style="height:7rem">
                                            Children is shown on hover <code class="ml-2">.show-child-on-hover</code>
                                            <div
                                                class="show-on-hover-parent mt-3 border border-danger p-2 bg-danger-500 rounded align-items-center">
                                                This element is hidden <code class="ml-2">.show-on-hover-parent</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="panel-8" class="panel">
                        <div class="panel-hdr">
                            <h2 data-filter-tags="gradient backgrounds color">
                                Gradient <span class="fw-300"><i>presets</i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    There are 8 different gradients that you can mix and match with different background
                                    colors. The gradient classes are <code>.bg-primary-gradient</code>,
                                    <code>.bg-info-gradient</code>, <code>.bg-success-gradient</code>,
                                    <code>.bg-warning-gradient</code>, <code>.bg-danger-gradient</code>,
                                    <code>.bg-fusion-gradient</code>, <code>.bg-brand-gradient</code>, and
                                    <code>.bg-trans-gradient</code> (which requires <code>.text-white</code> modifier)
                                </div>
                                <div class="mb-2">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><strong>Step 1:</strong> Select background</label>
                                                <select class="js-bg-color js-bg-gradient-demo custom-select">
                                                    <option>select background</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><strong>Step 2:</strong> Select gradient</label>
                                                <select class="js-bg-gradient custom-select js-bg-gradient-demo">
                                                    <option value="bg-primary-gradient">bg-primary-gradient</option>
                                                    <option value="bg-info-gradient">bg-info-gradient</option>
                                                    <option value="bg-success-gradient">bg-success-gradient</option>
                                                    <option value="bg-warning-gradient">bg-warning-gradient</option>
                                                    <option value="bg-danger-gradient">bg-danger-gradient</option>
                                                    <option value="bg-fusion-gradient">bg-fusion-gradient</option>
                                                    <option value="bg-brand-gradient">bg-brand-gradient</option>
                                                    <option value="bg-trans-gradient text-white">bg-trans-gradient</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="js-gradient-demo" class="p-3 rounded bg-primary-500 bg-primary-gradient">
                                    <h3>
                                        Header 3
                                        <small>
                                            Subheader text
                                        </small>
                                    </h3>
                                    <p>
                                        Paragraph text, <strong>in bold</strong>, <i>italic</i>, and <u>underlined</u>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    <script>
        //initApp.listFilter(navHooks, navFilterInput, navAnchor);
        //initApp.listFilter($('js-primary-nav > ul.nav-menu'), $('#nav_filter_input'), $('js-primary-nav'));


        initApp.listFilter($('#helper-filter-list'), $('#helper-filter-input'));

        //

        var jsopacity = $("#js_opacity");
        var jsopacityText = $("#js_opacity_class")

        $("#js_opacity_range").on("input change", function() {
            //do something
            jsopacityText.text('.opacity' + $(this).val());
            jsopacity.removeClass().addClass("rounded-circle width-3 h-auto opacity-" + $(this).val());
        });


        // gradient example

        var ng_bgColors,
            ng_bgColors_URL = "/admin/media/data/ng-bg-colors.json",
            formatBgColors = [];

        $.when(
            $.getJSON(ng_bgColors_URL, function(data) {
                ng_bgColors = data;
            })
        ).then(function() {
            if (ng_bgColors) {

                formatBgColors.push($('<option></option>').attr("value", null).text("select background"));

                //formatTextColors
                jQuery.each(ng_bgColors, function(index, item) {
                    formatBgColors.push($('<option></option>').attr("value", item).addClass(item).text(
                        item))
                });

                $("select.js-bg-color").empty().append(formatBgColors);

            } else {
                console.log("somethign went wrong!")
            }
        });

        /* change background */
        $(document).on('change', '.js-bg-gradient-demo', function() {
            var setBgColor = $('select.js-bg-color').val();
            var setValue = $('select.js-bg-gradient').val();

            $('select.js-bg-color').removeClassPrefix('bg-').addClass(setBgColor);
            $('#js-gradient-demo').removeClass().addClass("p-3 rounded " + ' ' + setBgColor + ' ' + setValue);

        })
    </script>
@endsection
