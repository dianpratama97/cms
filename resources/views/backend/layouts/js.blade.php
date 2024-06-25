<script src="{{ asset('backend') }}/assets/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('backend') }}/assets/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('backend') }}/assets/vendor/js/bootstrap.js"></script>
<script src="{{ asset('backend') }}/assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="{{ asset('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ asset('backend') }}/assets/vendor/libs/hammer/hammer.js"></script>

<script src="{{ asset('backend') }}/assets/vendor/js/menu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{ asset('backend') }}/assets/js/main.js"></script>
<!-- Page JS -->
@stack('js')
@stack('js-ext')

@include('sweetalert::alert')