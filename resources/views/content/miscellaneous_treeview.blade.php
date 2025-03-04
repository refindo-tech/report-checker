@extends('inc.main')
@section('title', 'Tree View')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/miscellaneous/treeview/treeview.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Miscellaneous'])
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-globe'></i> Treeview<sup class='badge badge-primary fw-500'>ADDON</sup>
                <small>
                    Tree view.
                </small>
            </h1>
            <div class="subheader-block">
                Right content of header
            </div>
        </div>
        <div class="alert alert-primary">
            <div class="d-flex flex-start w-100">
                <div class="mr-2 hidden-md-down">
                    <span class="icon-stack icon-stack-lg">
                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                    </span>
                </div>
                <div class="d-flex flex-fill">
                    <div class="flex-fill">
                        <span class="h5">About</span>
                        <p>Points.</p>
                        <p class="m-0">
                            Find in-depth, guidelines, tutorials and more on Addon's <a href="#"
                                target="_blank">Official Documentation</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Panel <span class="fw-300"><i>Title</i></span>
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
                                Panel tag <code>code</code>
                            </div>
                            <div class="tree">
                                <ul>
                                    <li>
                                        <span><i class="fa fa-lg fa-calendar"></i> 2013, Week 2</span>
                                        <ul>
                                            <li>
                                                <span class="label label-success"><i class="fa fa-lg fa-plus-circle"></i>
                                                    Monday, January 7: 8.00 hours</span>
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-clock-o"></i> 8.00</span> &ndash; <a
                                                            href="javascript:void(0);">Changed CSS to accomodate...</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="label label-success"><i class="fa fa-lg fa-minus-circle"></i>
                                                    Tuesday, January 8: 8.00 hours</span>
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-clock-o"></i> 6.00</span> &ndash; <a
                                                            href="javascript:void(0);">Altered code...</a>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-clock-o"></i> 2.00</span> &ndash; <a
                                                            href="javascript:void(0);">Simplified our approach to...</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="label label-warning"><i class="fa fa-lg fa-minus-circle"></i>
                                                    Wednesday, January 9: 6.00 hours</span>
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-clock-o"></i> 3.00</span> &ndash; <a
                                                            href="javascript:void(0);">Fixed bug caused by...</a>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-clock-o"></i> 3.00</span> &ndash; <a
                                                            href="javascript:void(0);">Comitting latest code to Git...</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="label label-danger"><i class="fa fa-lg fa-minus-circle"></i>
                                                    Wednesday, January 9: 4.00 hours</span>
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-clock-o"></i> 2.00</span> &ndash; <a
                                                            href="javascript:void(0);">Create component that...</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span><i class="fa fa-lg fa-calendar"></i> 2013, Week 3</span>
                                        <ul>
                                            <li>
                                                <span class="label label-success"><i class="fa fa-lg fa-minus-circle"></i>
                                                    Monday, January 14: 8.00 hours</span>
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-clock-o"></i> 7.75</span> &ndash; <a
                                                            href="javascript:void(0);">Writing documentation...</a>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-clock-o"></i> 0.25</span> &ndash; <a
                                                            href="javascript:void(0);">Reverting code back to...</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="panel-2" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Panel <span class="fw-300"><i>Title</i></span>
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
                                Panel tag <code>code</code>
                            </div>
                            <div class="tree">
                                <ul>
                                    <li>
                                        <span><i class="fa fa-lg fa-folder-open"></i> Parent</span>
                                        <ul>
                                            <li>
                                                <span><i class="fa fa-lg fa-plus-circle"></i> Administrators</span>
                                                <ul>
                                                    <li style="display:none">
                                                        <span> <label class="checkbox inline-block">
                                                                <input type="checkbox" name="checkbox-inline">
                                                                <i></i>Michael.Jackson</label> </span>
                                                    </li>
                                                    <li style="display:none">
                                                        <span> <label class="checkbox inline-block">
                                                                <input type="checkbox" checked="checked"
                                                                    name="checkbox-inline">
                                                                <i></i>Sunny.Ahmed</label> </span>
                                                    </li>
                                                    <li style="display:none">
                                                        <span> <label class="checkbox inline-block">
                                                                <input type="checkbox" checked="checked"
                                                                    name="checkbox-inline">
                                                                <i></i>Jackie.Chan</label> </span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-lg fa-minus-circle"></i> Child</span>
                                                <ul>
                                                    <li>
                                                        <span><i class="icon-leaf"></i> Grand Child</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="icon-leaf"></i> Grand Child</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-lg fa-plus-circle"></i> Grand Child</span>
                                                        <ul>
                                                            <li style="display:none">
                                                                <span><i class="fa fa-lg fa-plus-circle"></i> Great Grand
                                                                    Child</span>
                                                                <ul>
                                                                    <li style="display:none">
                                                                        <span><i class="icon-leaf"></i> Great great Grand
                                                                            Child</span>
                                                                    </li>
                                                                    <li style="display:none">
                                                                        <span><i class="icon-leaf"></i> Great great Grand
                                                                            Child</span>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li style="display:none">
                                                                <span><i class="icon-leaf"></i> Great Grand Child</span>
                                                            </li>
                                                            <li style="display:none">
                                                                <span><i class="icon-leaf"></i> Great Grand Child</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span><i class="fa fa-lg fa-folder-open"></i> Parent2</span>
                                        <ul>
                                            <li>
                                                <span><i class="icon-leaf"></i> Child</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    <script src="/admin/js/miscellaneous/treeview/treeview.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Handler when the DOM is fully loaded
        });
    </script>
@endsection
