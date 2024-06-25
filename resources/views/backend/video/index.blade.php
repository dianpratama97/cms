@extends('backend.layouts.main')
@section('subTitle', 'halaman video')
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
                            <th>video</th>
                            <th>name</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <iframe width="200" height="150" src="https://www.youtube.com/embed/{{ $item->link }}" frameborder="0" allowfullscreen></iframe>
                                </td>
                                <td>{{ $item->name }}</td>
                                <td><button class="btn btn-outline-danger btn-sm"
                                    data-bs-target="#modal_hapus{{ $item->id }}" data-bs-toggle="modal">
                                    <i class='ti ti-trash'></i>
                                </button></td>
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
            <form class="modal-content" method="POST" action="{{ url('/admin/video') }}">
                @csrf
                <div class="modal-header bg-primary">
                    <h5 class="text-capitalize text-white" id="modal_addTitle">video sekolah</h5>
                    <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" />
                            @error('name')
                                <span class='text-danger'>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" id="link" name="link"
                                class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}" />
                                <span>*https://www.youtube.com/watch?v=<b class="text-danger">vdCHxriGMCNM</b></span>
                            @error('link')
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
            <form class="modal-content" method="POST" action="{{ url('/admin/video/' . $item->id) }}">
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
                        <h4>{{ $item->name }}</h4>
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
