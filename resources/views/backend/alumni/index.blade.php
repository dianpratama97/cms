@extends('backend.layouts.main')
@section('subTitle', 'halaman alumni')
@section('content')

    <div class="card">
        <form method="post" role="alert" action="{{ url('/admin/alumni/hapusSemua') }}" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="card-header">
                <a href="{{ url('/admin/alumni/excel') }}" class="btn btn-outline-success">Download Excel</a>

                <button type="submit" class="btn btn-outline-danger btn-block text-capitalize delete-confirm">
                    <i class="fa fa-times"></i> hapus data
                </button>
                <input type="checkbox" class="form-check-input" id="checkAll" style="width: 30px; height: 35px;">
                PILIH SEMUA
            </div>
            {{-- ['class' => 'table table-bordered'], true --}}
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </form>
    </div>
@endsection


@push('css')
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
@endpush
@push('js')
    <script src="{{ asset('backend/assets') }}/js/dataTables.js"></script>
    <script src="{{ asset('backend/assets') }}/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/vendor/datatables/buttons.server-side.js') }}"></script>
@endpush
@push('js-ext')
    {{ $dataTable->scripts() }}
    <script>
        $("#checkAll").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>
@endpush
