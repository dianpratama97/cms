<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('backend/assets') }}/img/favicon/favicon-sekolah.ico" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
    rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/tabler-icons.css" />
<!-- <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/fontawesome.css" /> -->
<!-- <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/flag-icons.css" /> -->

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/rtl/core.css" />
<link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/rtl/theme-default.css" />
<link rel="stylesheet" href="{{ asset('backend') }}/assets/css/demo.css" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/node-waves/node-waves.css" />
<link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('backend') }}/assets/vendor/js/helpers.js"></script>
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('backend') }}/assets/js/config.js"></script>
@stack('css')
