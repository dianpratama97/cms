<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('frontend') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ pengaturan()->app_name }} - LOGIN</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/fonts/tabler-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/demo.css" />

    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/css/pages/page-auth.css" />
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Login -->
                @yield('content')
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('frontend') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/js/bootstrap.js"></script>


    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('frontend') }}/assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('frontend') }}/assets/js/pages-auth.js"></script>
</body>

</html>
