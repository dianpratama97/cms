@extends('backend.layouts.main')
@section('subTitle', 'halaman gellery')
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
                            <th>foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('storage/gambar/backend/gallery/' . $item->upload) }}"
                                        width="20%"></td>
                                <td>
                                    <button class="btn btn-outline-danger btn-sm" data-bs-target="#modal_hapus{{ $item->id }}"
                                        data-bs-toggle="modal">
                                        <i class='ti ti-trash'></i>
                                    </button>
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


    {{-- add --}}
    <div class="modal fade" id="modal_add" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" method="POST" action="{{ url('/admin/gallery') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-primary">
                    <h5 class="text-capitalize text-white" id="modal_addTitle">gallery sekolah</h5>
                    <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="upload" class="form-label">upload</label>
                            <input type="file" class="form-control @error('upload') is-invalid @enderror" id="image"
                                name="upload[]" multiple>
                            @error('upload')
                                <span class='text-danger'>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-success">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>

    {{-- delete --}}
    @foreach ($data as $item)
        <div class="modal fade" id="modal_hapus{{ $item->id }}" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog">
                <form class="modal-content" method="POST" action="{{ url('/admin/gallery/' . $item->id) }}">
                    @method('DELETE')
                    @csrf
                    <div class="modal-header bg-warning">
                        <h5 class=" text-capitalize text-white" id="modal_hapusTitle">categories</h5>
                        <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col mb-3 text-center">
                            <h3>Anda Yakin?</h3>
                            <h4>{{ $item->upload }}</h4>
                            <h4>Data Akan di Hapus.</h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BATAL</button>
                        <button type="submit" class="btn btn-success">HAPUS</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
