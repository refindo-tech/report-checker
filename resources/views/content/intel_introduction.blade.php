@extends('inc.main')
@section('title', 'Introduction')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Application Intel'])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'info-circle',
                'heading1' => 'Introduction',
                'pagedescription' => 'A brief introduction to this WebApp',
            ])
            @endcomponent
        </div>
        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
            <h3 class="mb-g">
                Hi Everyone,
            </h3>
            <p>
                Some time ago we asked for your input, whether you were a seasoned SmartAdmin user or just peeking around
                the corner, and WOW, did you deliver! After reading each and everyone of your replies on the survey, we have
                taken each piece of praise and criticism to heart to scope out our plans for SmartAdmin. All feedback will
                be used to make your favorite theme that much better, but these were some of the highlights.
            </p>
            <p>
                A whopping 72% of you said you were ready for a fresh new design, while SmartAdmin is and a revolutionary
                view on what a good bootstrap based template should be, having something new to look at can make anyone feel
                invigorated. And let's be honest, who doesn't like a modern update of your favorite theme! While most you
                are still happy with the current variations, around 50% of you have asked for vue.js support. With this
                framework rapidly gaining popularity it is surely one to include in the family of frameworks! And, last, but
                certainly not least, a very large majority of a staggering 90% wanted more plugins and regular updates.
            </p>
            <p>
                SmartAdmin takes great care to ensure that valuable and popular plugins are supported as much as possible on
                a drop-in basis, meaning without doing heavy modifications to extend the look and feel of your favorite
                admin template :) . And if the plugin is in demand enough, we won't hesitate to put in the hours to support
                the look and feel of SmartAdmin.
            </p>
            <p>
                But how you ask? Well in order to make the next version of SmartAdmin the best ever and to re-deliver on our
                promise of continued support and quality, we wrote the theme from the ground-up using the latest Bootstrap
                practises. As a result we are better able to support new frameworks as they come up and ensure that plugin
                support is quick and reliable. In addition we have partnered up with some of the communities best developers
                to ensure that our tailor made variations are of top-notch quality and follow the principles that we at
                SmartAdmin take to heart.
            </p>
            <p>
                We're really confident that SmartAdmin 4.0 will bring back that first theme experience while still keeping
                the familiarity that you have grown used to. It's a brand new theme, but with all the things you love and
                then some. And to ensure that you our loyal customers get this experience first-hand, we will be publishing
                the HTML update free-of-charge as an update to your current SmartAdmin license!
            </p>
            <p>
                Last but not least, we would like to thank each and everyone of you, our loyal customers, for your patience
                and continued support in SmartAdmin. Without you this would not have been possible!
            </p>
            <p>
                Sincerely,<br>
                The SmartAdmin Team<br>
            </p>
        </div>
        <h3>
            SmartAdmin Team
            <small class="mb-0">We build cool things...</small>
        </h3>
        <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
            <div
                class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                <img src="/admin/img/demo/authors/sunny.png" alt="Sunny A."
                    class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                <div class="ml-2 mr-3">
                    <h5 class="m-0">
                        Sunny A. (UI/UX Expert)
                        <small class="m-0 fw-300">
                            Lead Author
                        </small>
                    </h5>
                    <a href="https://twitter.com/@myplaneticket" class="text-info fs-sm" target="_blank">@myplaneticket</a>
                    -
                    <a href="https://wrapbootstrap.com/user/myorange" class="text-info fs-sm" target="_blank"
                        title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                </div>
            </div>
            <div
                class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                <img src="/admin/img/demo/authors/josh.png" alt="Jos K."
                    class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                <div class="ml-2 mr-3">
                    <h5 class="m-0">
                        Jos K. (ASP.NET Developer)
                        <small class="m-0 fw-300">
                            Partner &amp; Contributor
                        </small>
                    </h5>
                    <a href="https://twitter.com/@atlantez" class="text-info fs-sm" target="_blank">@atlantez</a> -
                    <a href="https://wrapbootstrap.com/user/Walapa" class="text-info fs-sm" target="_blank"
                        title="Contact Jos"><i class="fal fa-envelope"></i></a>
                </div>
            </div>
            <div
                class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                <img src="/admin/img/demo/authors/jovanni.png" alt="Jovanni Lo"
                    class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                <div class="ml-2 mr-3">
                    <h5 class="m-0">
                        Jovanni L. (PHP Developer)
                        <small class="m-0 fw-300">
                            Partner &amp; Contributor
                        </small>
                    </h5>
                    <a href="https://twitter.com/@lodev09" class="text-info fs-sm" target="_blank">@lodev09</a> -
                    <a href="https://wrapbootstrap.com/user/lodev09" class="text-info fs-sm" target="_blank"
                        title="Contact Jovanni"><i class="fal fa-envelope"></i></a>
                </div>
            </div>
            <div
                class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                <img src="/admin/img/demo/authors/roberto.png" alt="Jovanni Lo"
                    class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                <div class="ml-2 mr-3">
                    <h5 class="m-0">
                        Roberto R. (Rails Developer)
                        <small class="m-0 fw-300">
                            Partner &amp; Contributor
                        </small>
                    </h5>
                    <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> -
                    <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank"
                        title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <p class="fs-lg">
            <a href="#" class="fw-500 fs-xl">> Ready to join our dedicated team?</a><br>
            We are always on the lookout to expand and add unique app flavors to SmartAdmin. If you think you can contribute
            and create your very own flavors, get in touch with us or <a href="#" target="_blank">click here to learn
                more</a> about our partnership program.
        </p>
    </main>
@endsection
