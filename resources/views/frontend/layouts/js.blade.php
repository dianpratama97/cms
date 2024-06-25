<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('frontend') }}/assets/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('frontend') }}/assets/vendor/js/bootstrap.js"></script>
<script src="{{ asset('frontend') }}/assets/vendor/libs/node-waves/node-waves.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('frontend') }}/assets/vendor/libs/nouislider/nouislider.js"></script>
<script src="{{ asset('frontend') }}/assets/vendor/libs/swiper/swiper.js"></script>

<!-- Main JS -->
<script src="{{ asset('frontend') }}/assets/js/front-main.js"></script>

<!-- Page JS -->
<script src="{{ asset('frontend') }}/assets/js/front-page-landing.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('sweetalert::alert')