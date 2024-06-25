@if (session('success'))
    <div class="bs-toast toast toast-placement-ex m-2 fade top-0 start-0 show" role="alert" aria-live="assertive"
        aria-atomic="true" data-delay="2000" id="toastr_popUp">
        <div class="toast-header">
            <i class="ti ti-bell ti-xs me-2 text-success"></i>
            <div class="me-auto fw-medium">Berhasil</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">{{ session('success') }}</div>
    </div>
@endif
@if (session('error'))
    <div class="bs-toast toast toast-placement-ex m-2 fade top-0 start-0 show" role="alert" aria-live="assertive"
        aria-atomic="true" data-delay="2000" id="toastr_popUp">
        <div class="toast-header">
            <i class="ti ti-bell ti-xs me-2 text-danger"></i>
            <div class="me-auto fw-medium">Berhasil</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">{{ session('error') }}</div>
    </div>
@endif

@push('js-ext')
    <script type='text/javascript'>
        $(function() {
            $('#toastr_popUp').delay(3000).fadeOut();
        });
    </script>
@endpush
