@extends('inc.main')
@section('title', 'Side Panel')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'UI Components'])
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-window'></i> Side Panel
                <small>
                    A neat way to present side panels
                </small>
            </h1>
        </div>
        <div class="ie-only alert alert-danger d-none">
            <h4>This message is visible to IE users only!</h4>
            <p>
                This specific layout structure you are trying to view is buggy on Internet Explorer, which may cause the
                container to stretch. This is a bug within flexbox and IE, unfortunately there is no direct solution. The
                workaround would be to contain the box with <code>.d-block</code> and <code>.position-absolute</code> with
                defined width <code>.w-100</code> and height <code>.h-100</code>. To see a working example of this, check
                out our <a href="page_inbox_general.html" target="_blank"> Inbox page </a> which uses the same layout
                structure with a bit of tweaking.
            </p>
        </div>
        <!-- notice the utilities added to the wrapper below -->
        <div class="d-flex flex-grow-1 p-0 shadow-1">
            <!-- left slider panel : must have unique ID-->
            <div id="js-slide-left"
                class="flex-wrap flex-shrink-0 position-relative slide-on-mobile slide-on-mobile-left bg-primary-200 pattern-0 p-3">
                <div class="alert alert-primary">
                    These side panels slide out on mobile view port and can be activated by a button as an "slide in/out"
                    mode.
                </div>
            </div>
            <!-- left slider panel backdrop : activated on mobile, must be place immideately after left slider closing tag -->
            <div class="slide-backdrop" data-action="toggle" data-class="slide-on-mobile-left-show"
                data-target="#js-slide-left"></div>
            <!-- middle content area -->
            <div class="d-flex flex-column flex-grow-1 bg-white">
                <div class="p-0 p-sm-3">
                    <div class="row hidden-lg-up mb-g">
                        <div class="col-12">
                            <div class="alert alert-info">
                                These buttons below can be placed anywhere on your screen. Applying the responsive utility
                                classes, you control the visibility of the buttons, for only when they are needed.
                            </div>
                        </div>
                        <div class="col-6">
                            <!-- this button is activated on mobile view and activates the left panel -->
                            <a href="javascript:void(0);" class="btn btn-primary btn-block btn-lg" data-action="toggle"
                                data-class="slide-on-mobile-left-show" data-target="#js-slide-left">
                                open left panel
                            </a>
                        </div>
                        <div class="col-6">
                            <!-- this button is activated on mobile view and activates the right panel -->
                            <a href="javascript:void(0);" class="btn btn-primary btn-block btn-lg" data-action="toggle"
                                data-class="slide-on-mobile-right-show" data-target="#js-slide-right">
                                open right panel
                            </a>
                        </div>
                    </div>
                    <div class="panel-tag">
                        <p>These side panels slide out on mobile view port and can be activated by a button as an "slide
                            in/out" mode. We use the classes <code>.slide-on-mobile</code> and
                            <code>.slide-on-mobile-{left,right}</code> on the panels, which are then activated on mobile
                            viewport by toggling the class <code>.slide-on-mobile-{left,right}-show</code>
                        </p>
                        <p>
                            The backdrop is inserted right after the closing tag of the <code>.slider-on-mobile</code>
                            container. Generally this slide panel is pared with <code>.layout-composed</code> to give it a
                            nice clean look.
                        </p>
                        <a href="#" class="btn btn-secondary" data-action="toggle" data-class="layout-composed">Try
                            with Composed Layout</a>
                    </div>
                    <div class="d-flex hidden-lg-down">
                        <img src="img/demo/side-panel-demo.gif" alt="" class="m-auto shadow">
                    </div>
                </div>
            </div>
            <!-- right slider panel : must have unique ID -->
            <div id="js-slide-right"
                class="flex-wrap flex-shrink-0 position-relative slide-on-mobile slide-on-mobile-right bg-primary-200 pattern-0 p-3">
                <div class="alert alert-primary">
                    You can place any content in these side panels, making it a secondary optional navigation panel.
                </div>
            </div>
            <!-- right slider panel backdrop : activated on mobile, must be place immideately after right slider closing tag -->
            <div class="slide-backdrop" data-action="toggle" data-class="slide-on-mobile-right-show"
                data-target="#js-slide-right"></div>
        </div>
    </main>
@endsection
