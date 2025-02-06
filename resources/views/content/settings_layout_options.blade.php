@extends('inc.main')
@section('title', 'Layout Options')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Theme Settings'])
        <div class="subheader">
            @component('inc._page_heading', [
                'heading1' => 'Theme Settings:',
                'heading2' => 'Layout Options',
            ])
                @slot('pagedescription')
                    Over 36 layout possibilities and over <span class='fw-500 color-info-700'>285 combinations</span>
                @endslot
            @endcomponent
        </div>
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
                        <span class="h5">Settings Panel</span>
                        <br>
                        You can reset the changes at anytime by clicking the reset button found in the <a href="#"
                            class="fw-500" data-toggle="modal" data-target=".js-modal-settings">settings panel</a>. To
                        enable these settings through scripts, <strong>e.g.</strong> <code>
                            initApp.pushSettings("header-function-fixed, nav-function-fixed")</code>, see the <a
                            href="/settings_saving_db" class="fw-500">saving to database</a> page.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Fixed <span class="fw-300"><i>Header</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-auto">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                header is in a fixed position at all times, effecting mobile & desktop view
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.fixedHeader('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.header-function-fixed</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="header-function-fixed"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="header-function-fixed"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div id="panel-2" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Fixed <span class="fw-300"><i>Navigation</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-warning fw-300 mr-1">DESKTOP</span>
                            <span class="badge bg-info-800 fw-300">TABLETS</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Left panel position becomes fixed, activates custom scroll plugin
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.fixedNavigation('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.nav-function-fixed</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="nav-function-fixed"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="nav-function-fixed"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div id="panel-3" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Minify <span class="fw-300"><i>Navigation</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-warning fw-300 ml-1">DESKTOP</span>
                            <span class="badge bg-info-800 fw-300 ml-1">TABLETS</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Navigation text are collapsed. Only visible portion are the icons. Hover the icons to reveal
                                any child elements
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.minifyNavigation('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.nav-function-minify</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="nav-function-minify"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="nav-function-minify"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div id="panel-4" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Hide <span class="fw-300"><i>Navigation</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-warning fw-300 ml-1">DESKTOP</span>
                            <span class="badge bg-info-800 fw-300 ml-1">TABLETS</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Navigation is revealed upon user hovering the visible portion of the navigation
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.hideNavigation('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.nav-function-hidden</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="nav-function-hidden"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="nav-function-hidden"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div id="panel-5" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Top <span class="fw-300"><i>Navigation</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-warning fw-300 ml-1">DESKTOP</span>
                            <span class="badge bg-info-800 fw-300 ml-1">TABLETS</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Main navigation shifts to the top (horizontal nav)
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.horizontalNavigation('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.nav-function-top</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="nav-function-top"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="nav-function-top"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div id="panel-6" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Boxed <span class="fw-300"><i>Layout</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-warning fw-300 ml-1">DESKTOP</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Contain layout to 1200px max width. Some classes are not compatible with this setting
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.boxed('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-main-boxed</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-main-boxed"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-main-boxed"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div id="panel-7" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Push <span class="fw-300"><i>Content</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-success fw-300 ml-1">MOBILE</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Content panel pushed on menu reveal
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.pushContent('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.nav-mobile-push</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="nav-mobile-push"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="nav-mobile-push"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div id="panel-8" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            No <span class="fw-300"><i>Overlay</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-success fw-300 ml-1">MOBILE</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Removes mesh on menu reveal
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.overlay('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.nav-mobile-no-overlay</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="nav-mobile-no-overlay"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="nav-mobile-no-overlay"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div id="panel-9" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Off <span class="fw-300"><i>Canvas<sup>beta</sup></i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-success fw-300 ml-1">MOBILE</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Content overlaps menu
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.offCanvas('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.nav-mobile-slide-out</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="nav-mobile-slide-out"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="nav-mobile-slide-out"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div id="panel-10" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Bigger <span class="fw-300"><i>Font</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-1">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Fonts are bigger for readability
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.bigFonts('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-bigger-font</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-bigger-font"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-bigger-font"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div id="panel-11" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Contrast <span class="fw-300"><i>Text (WCAG 2 AA)</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-1">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                4.5:1 text contrast ratio to meet WCAG 2 AA standards
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.highContrast('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-high-contrast</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-high-contrast"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-high-contrast"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div id="panel-12" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Daltonism <span class="fw-300"><i><sup>beta</sup></i></span>
                        </h2>
                        <div class="panel-toolbar">
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Color vision deficiency (this is a progressive UI option)
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.colorblind('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-color-blind</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-color-blind"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-color-blind"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div id="panel-13" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Preloader <span class="fw-300"><i>Inside</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-1">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Preloader will be inside content
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.preloadInside('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-pace-custom</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-pace-custom"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-pace-custom"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div id="panel-14" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Clean <span class="fw-300"><i>Page Background</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-1">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                A white background for your webapp
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.cleanBackground('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-clean-page-bg</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-clean-page-bg"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-clean-page-bg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div id="panel-15" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Hide <span class="fw-300"><i>Navigation Icons</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-1">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Hides navigation icons for a slick and clean look (some classes will be incompatible)
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.hideNavIcons('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-hide-nav-icons</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-hide-nav-icons"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-hide-nav-icons"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div id="panel-16" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Disable <span class="fw-300"><i>CSS Animation</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-1">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Disables css based animations
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.noAnimation('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-disable-animation</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-disable-animation"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-disable-animation"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div id="panel-17" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Hide <span class="fw-300"><i>Info Card</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-1">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Hides info card from left panel
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.hideInfoCard('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-hide-info-card</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-hide-info-card"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-hide-info-card"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div id="panel-18" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Lean <span class="fw-300"><i>Subheader</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-1">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Distinguished page header
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.leanSubheader('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-lean-subheader</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-lean-subheader"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-lean-subheader"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div id="panel-19" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Hierarchical <span class="fw-300"><i>Navigation</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-1">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Clear breakdown of nav links (some options will be incompatble)
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <strong>JavaScript</strong>
                                    <br>
                                    <code>layouts.hierarchicalNav('on')</code> or <code>('off')</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>Class to body</strong>
                                    <br>
                                    <code>.mod-nav-link</code>
                                </div>
                                <div class="col-12 mb-g">
                                    <strong>App Usage</strong>
                                    <br>
                                    <code>data-action="toggle" data-class="mod-nav-link"</code>
                                </div>
                            </div>
                            <a href="#" onclick="return false;" class="btn btn-switch m-0" data-action="toggle"
                                data-class="mod-nav-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div id="panel-20" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            RTL <span class="fw-300"><i>Support</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <span class="badge badge-primary fw-300 ml-1">GLOBAL</span>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                "Right to Left" layout support for, arabic, hibrew, etc...
                            </div>
                            <div class="row">
                                <div class="col-12 mb-g">
                                    <p>
                                        To use the RTL feature, you can either enable it by attaching the *-rtl.css or
                                        recompiling the build after anabling the rtl:true
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
