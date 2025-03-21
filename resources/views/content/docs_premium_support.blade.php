@extends('inc.main')
@section('title', 'Premium Support')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Documentation'])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'book',
                'heading1' => 'Documentation:',
                'heading2' => 'Premium Support',
                'pagedescription' => 'Paid support for extra help and direction',
            ])
            @endcomponent
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2>
                    Support
                </h2>
                <p class="mb-g">
                    SmartAdmin is designed and documented to be easy to develop with and to use. Inevitably, as with any
                    complex Theme library, you might have a question about how to perform a certain action, or wish to
                    support the project to ensure that any issues in the Theme are found and dealt with quickly.
                </p>
                <h3>
                    Maintenance and support
                </h3>
                <p>
                    When integrating SmartAdmin in a large project, core to your project or company, you want to be assured
                    that SmartAdmin and its extensions will be actively maintained with enhanced features being added to the
                    core library, new plugins/extensions developed and any issues that are found being resolved quickly and
                    efficiently.
                </p>
                <p>
                    Maintenance and support contracts have a duration of <strong>6 months</strong>, at which point it can be
                    renewed to maintain the support level you require.
                </p>
                <p class="mb-g">
                    <strong>For more information on premium support and purchasing support credits, please find our <a
                            href="/intel_introduction">contact details here</a>.</strong>
                </p>
                <h3>
                    Free community support
                </h3>
                <p>
                    Free support is available for SmartAdmin through the <a href="https://support.gotbootstrap.com/"
                        target="_blank">SmartAdmin's Community forums</a>. Answers are provided freely by the community
                    whenever possible. The forums are a busy place and it is not always possible to ensure that every
                    question will receive an answer from the community. To increase the likelihood of receiving a reply,
                    when posting a question please ensure that you provide a link to a test case, screenshot or formatted
                    codes, showing the problem so it can be debugged.
                </p>
            </div>
        </div>
    </main>
@endsection
