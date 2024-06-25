@extends('backend.layouts.main')
@section('subTitle', 'halaman categories')
@section('content')
    @include('backend.layouts.toastr.message')

    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal_add">
                <i class='bx bx-plus-medical'></i>
                Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-nowrap text-center">
                            <th>no</th>
                            <th>nama</th>
                            <th>slug</th>
                            <th>create at</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <div class="text-center">
                                        <button class="btn btn-outline-warning btn-xs"
                                            data-bs-target="#modal_edit{{ $item->id }}" data-bs-toggle="modal">
                                            <i class='ti ti-pencil'></i>
                                        </button>
                                        <button class="btn btn-outline-danger btn-xs"
                                            data-bs-target="#modal_hapus{{ $item->id }}" data-bs-toggle="modal">
                                            <i class='ti ti-trash'></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{ $data->links() }}
        </div>
    </div>

    <!-- Modal Add-->
    @include('backend.category.modal_add')
    <!-- Modal edi-->
    @include('backend.category.modal_edit')
    <!-- Modal edi-->
    @include('backend.category.modal_delete')
@endsection
