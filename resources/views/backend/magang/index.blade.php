@extends('backend.layouts.main')
@section('subTitle', 'halaman nilai magang')
@section('content')

    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-outline-success btn-sm text-capitalize" data-bs-toggle="modal"
                data-bs-target="#modal-upload">upload excel</button>
        </div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>

    @include('backend.magang.upload')

    {{-- modal detail --}}
    <div class="modal fade" id="modalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-detail"></div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
@endpush
@push('js')
    <script src="{{ asset('backend/assets') }}/datatable/dataTables.min.js"></script>
    <script src="{{ asset('backend/assets') }}/datatable/dataTables.bootstrap5.min.js"></script>
@endpush
@push('js-ext')
    {{ $dataTable->scripts() }}
    <script>
        $("#checkAll").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

        //js show

        const modalShow = new bootstrap.Modal($('#modalDetail'));
        $('#magang-table').on('click', '.action', function() {
            let data = $(this).data();
            let id = data.id;
            let jenis = data.jenis;

            if (jenis == 'show') {
                $.ajax({
                    method: 'get',
                    url: `{{ url('admin/magang/') }}/${id}`,
                    success: function(response) {
                        $('#modalDetail').find('.modal-detail').html(response);
                        modalShow.show();
                    }
                });
            }
        })
    </script>
@endpush
