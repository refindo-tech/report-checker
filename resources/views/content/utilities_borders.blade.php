@extends('inc.main')
@section('title', 'Borders')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Utilities'])
        <div class="subheader">
            @component('inc._page_heading', [
                'heading1' => 'Borders',
            ])
                @slot('pagedescription')
                    Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons, or
                    any other element.
                @endslot
            @endcomponent
        </div>
        <div class="row">
            <div class="col-xl-6">
                <!--Colorful borders-->
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Colorful <span class="fw-300"><i>borders</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10"
                                data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Use color profiles to the following border colors <code>,border-primary</code>,
                                <code>.border-secondary</code>, <code>.border-success</code>, <code>.border-danger</code>,
                                <code>.border-warning</code>, <code>.border-info</code>, <code>.border-light</code>,
                                <code>.border-dark</code>, <code>.border-white</code>, <code>.border-transparent</code>,
                                <code>.border-faded</code>
                            </div>
                            <div class="demo">
                                <div class="border border-primary width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-secondary width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-success width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-danger width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-warning width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-info width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-light width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-dark width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-white width-10 height-10 d-inline-block bg-faded"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Add borders-->
                <div id="panel-2" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Add <span class="fw-300"><i>borders</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10"
                                data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Add border using <code>.border</code>, <code>.border-top</code>, <code>.border-right</code>,
                                <code>.border-right</code>, <code>.border-bottom</code>, <code>.border-left</code>
                            </div>
                            <div class="demo">
                                <div class="border width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border-top width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border-right width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border-bottom width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border-left width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border rounded-circle width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border rounded width-10 height-10 d-inline-block bg-faded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <!--Rounded-->
                <div id="panel-3" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Rounded <span class="fw-300"><i>example</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10"
                                data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Round edges or control each corner using <code>.rounded</code>, <code>rounded-top</code>,
                                <code>rounded-right</code>, <code>rounded-bottom</code>, <code>rounded-left</code>,
                                <code>rounded-circle</code>, <code>rounded-0</code>, <code>.rounded-plus</code>,
                                <code>.rounded-{sm,lg}</code>, <code>.rounded-pill</code>,
                                <code>border-{top,bottom}-{left,right}-radius-0</code>
                            </div>
                            <div class="demo">
                                <div class="rounded bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="rounded-top bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="rounded-right bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="rounded-bottom bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="rounded-left bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="rounded-circle bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="rounded-plus bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="rounded-0 bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Remove borders-->
                <div id="panel-4" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Remove <span class="fw-300"><i>borders</i></span>
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
                                Subtract borders with <code>border-0</code>, <code>border-top-0</code>,
                                <code>border-right-0</code>, <code>border-bottom-0</code>, <code>border-left-0</code>,
                                <code>.border-transparent</code>
                            </div>
                            <div class="demo">
                                <div class="border-0 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-top-0 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-right-0 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-bottom-0 width-10 height-10 d-inline-block bg-faded"></div>
                                <div class="border border-left-0 width-10 height-10 d-inline-block bg-faded"></div>
                                <div
                                    class="border rounded-circle border-right-0 border-left-0 width-10 height-10 d-inline-block bg-faded">
                                </div>
                                <div
                                    class="border rounded width-10 border-right-0 border-left-0 height-10 d-inline-block bg-faded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
