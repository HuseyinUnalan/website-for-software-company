<!DOCTYPE html>
<html dir="ltr" lang="tr">


<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="description" content="{{ $settings->site_description }}" />
    <meta name="keywords" content="{{ $settings->site_keywords }}" />
    <meta name="author" content="İstanbul Yazılım" />

    <title>@yield('site_title')</title>

    <link rel="icon" type="image/png" href="{{ asset($settings->favicon) }}" />

    <link rel="apple-touch-icon" href="{{ asset($settings->favicon) }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset($settings->favicon) }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset($settings->favicon) }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset($settings->favicon) }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset($settings->favicon) }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset($settings->favicon) }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset($settings->favicon) }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset($settings->favicon) }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset($settings->favicon) }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&amp;family=Questrial&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />

</head>

<body>

    <!-- Header Start !-->
    @include('frontend.body.header')
    <!-- Header End !-->

    <div class="body-overlay"></div>

    @yield('content')

    <!--- Start Footer !-->
    @include('frontend.body.footer')
    <!--- End Footer !-->

    <!-- Scroll Up Section Start -->
    <div id="scrollTop" class="scrollup-wrapper">
        <div class="scrollup-btn">
            <i class="fa-regular fa-angle-up"></i>
        </div>
    </div>
    <!-- Scroll Up Section End -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/inview.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
</body>


</html>
