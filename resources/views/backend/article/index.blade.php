@extends('backend.layouts.main')
@section('subTitle', 'halaman article')
@section('content')
    @include('backend.layouts.toastr.message')

    <div class="card">
        <div class="card-header">
            <a href="{{ url('/admin/article/create') }}" class="btn btn-outline-success">
                <i class='bx bx-plus-medical'></i>
                Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr class="text-nowrap text-center">
                            <th>no</th>
                            <th>title</th>
                            <th>kategori</th>
                            <th>view</th>
                            <th>status</th>
                            <th>publish date</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/datatable/dataTables.bootstrap5.min.css') }}">
@endpush
@push('js')
<script src="{{ asset('backend/assets/datatable/dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/datatable/dataTables.bootstrap5.min.js') }}"></script>
@endpush
@push('js-ext')
    <script>
        function hapus(e) {
            let id = e.getAttribute('data-id');
            Swal.fire({
                title: "HAPUS DATA",
                text: "Data akan di hapus.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#00CED1",
                cancelButtonColor: "#ccff00",
                confirmButtonText: "Hapus",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'DELETE',
                        url: '/admin/article/' + id,
                        dataType: 'json',
                        success: function(response) {
                            Swal.fire({
                                title: "Berhasil.",
                                text: "Data di hapus.",
                                icon: "success"
                            }).then((result) => {
                                window.location.href = '/admin/article';
                            });
                        },
                        error: function(xhr, ajaxOptions, throwError) {
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + throwError);
                        }
                    });
                };
            });
        };
    </script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url()->current() }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'category_id',
                        name: 'category_id'
                    },
                    {
                        data: 'views',
                        name: 'views'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'publish_date',
                        name: 'publish_date'
                    },
                    {
                        data: 'button',
                        name: 'button'
                    },
                ]
            });
        });
    </script>
@endpush
