@extends('frontend.layouts.app')

{{-- @section('subTitle', 'Dashboard') --}}
@section('content')
    <div id="services" class="services section">
        <!-- What people say slider: Start -->
        <div class="container">
            <div class="card mt-3 mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-body">

                    <div class="row d-flex justify-content-center">
                        @foreach ($data as $item)
                            <div class="m-4" style="width: 25%;">
                                <img src="{{ asset('storage/gambar/backend/gallery/' . $item->upload) }}"
                                    class="card-img-top" alt="{{ $item->upload }}">
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="card-footer">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
