@extends('backend.layouts.main')
@section('subTitle', 'halaman edit article')
@section('content')
    @include('backend.layouts.toastr.message')

    <form action="{{ url('/admin/article/' . $article->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" value="{{ $article->img }}" name="oldImg">
        <div class="card">

            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="title" class="col-md-4 col-form-label">Judul</label>
                                    <div class="col-md-8">
                                        <input class="form-control @error('title') is-invalid @enderror" type="text"
                                            name="title" value="{{ old('title', $article->title) }}" id="title">
                                        @error('title')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="category_id" class="col-md-3 col-form-label">Category</label>
                                    <div class="col-md-9">
                                        <select class="form-control @error('category_id') is-invalid @enderror"
                                            name="category_id" id="category_id">
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}"
                                                    {{ $categorie->id == $article->category_id ? 'selected' : '' }}>
                                                    {{ $categorie->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label for="desc" class="col-md-2 col-form-label">Keterangan</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="myEditor">{{ old('desc', $article->desc) }}</textarea>

                                        @error('desc')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="img" class="col-md-4 col-form-label">Gambar</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control @error('img') is-invalid @enderror"
                                            name="img" id="img" onchange="preview()">
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/gambar/backend/article/' . $article->img) }}"
                                                width="20%" id="frame">
                                        </div>
                                        
                                        @error('img')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="status" class="col-md-3 col-form-label">status</label>
                                    <div class="col-md-9">
                                        <select class="form-control @error('status') is-invalid @enderror" name="status"
                                            id="status">
                                            <option value="1" {{ $article->status == 1 ? 'selected' : '' }}>Publish
                                            </option>
                                            <option value="0" {{ $article->status == 0 ? 'selected' : '' }}>Private
                                            </option>
                                        </select>
                                        @error('status')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="publish_date" class="col-md-4 col-form-label">Tanggal Publish</label>
                                    <div class="col-md-8">
                                        <input type="date"
                                            class="form-control @error('publish_date') is-invalid @enderror"
                                            name="publish_date" id="publish_date"
                                            value="{{ old('publish_date', $article->publish_date) }}">
                                        @error('publish_date')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ url('/admin/article') }}" class="btn btn-outline-primary">
                    <i class='bx bx-arrow-back'></i>
                    Kembali
                </a>
                <button type="submit" class="btn btn-outline-success">Simpan</button>
            </div>
        </div>
    </form>

@endsection
@push('js')
    <script src="{{ asset('backend/assets') }}/ckeditor/ckeditor.js"></script>
@endpush
@push('js-ext')
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            clipboard_handleImages: false
        }
    </script>
    <script>
         //image preview
         function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }

        //ckEditor
        CKEDITOR.replace('myEditor', options);
    </script>
@endpush
