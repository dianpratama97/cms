@extends('backend.layouts.main')
@section('subTitle', 'halaman users')
@section('content')
    @include('backend.layouts.toastr.message')

    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal_add">
                <i class='ti ti-plus-medical'></i>
                Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered" id="users-table">
                    <thead>
                        <tr class="text-nowrap text-center">
                            <th>no</th>
                            <th>nama</th>
                            <th>email</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <div class="text-center">
                                        <button type="button" data-id='{{ $item->id }}' data-jenis="edit"
                                            class="btn btn-sm action btn-outline-warning">
                                            <i class='ti ti-pencil'></i>
                                        </button>

                                        <button type="button" data-id='{{ $item->id }}'
                                            class="btn btn-outline-danger btn-sm hapus">
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
            {{-- {{ $data->links() }} --}}
        </div>
    </div>

    <div class="modal fade" id="modal_add" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" method="POST" action="{{ route('user.store') }}">
                @csrf
                <div class="modal-header bg-primary">
                    <h5 class="text-capitalize text-white" id="modal_addTitle">tambah users</h5>
                    <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="container">
                    <div class="mt-3">
                        <label for="name" class="form-label">Nama Users</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name">
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email">
                    </div>
                    <div class="mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password">
                        <small>Minimal 3 Karakter</small>
                    </div>
                    <div class="mt-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select @error('role') is-invalid @enderror" id="role" name="role">
                            <option value="">--pilih role--</option>
                            <option value="admin">Admin</option>
                            <option value="operator">Operator</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-success">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>

    {{-- modal edit --}}
    <div class="modal fade" id="modal-edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-edit"></div>
    </div>

@endsection
@include('backend.user.js')
