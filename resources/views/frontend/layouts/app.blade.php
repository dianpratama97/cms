<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('frontend') }}/assets/" data-template="front-pages-no-customizer">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ pengaturan()->app_name }}</title>

    <meta name="description" content="" />

    @include('frontend.layouts.css')
</head>

<body>
    <script src="{{ asset('frontend') }}/assets/vendor/js/dropdown-hover.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/js/mega-dropdown.js"></script>

    <!-- Navbar: Start -->
    @include('frontend.layouts.nav')
    <!-- Navbar: End -->

    <!-- Sections:Start -->
    <div data-bs-spy="scroll" class="scrollspy-example">
        @yield('content')
    </div>
    <!-- / Sections:End -->

    <!-- Footer: Start -->
    @include('frontend.layouts.footer')
    <!-- Footer: End -->
    @include('frontend.layouts.js')
</body>

</html>
