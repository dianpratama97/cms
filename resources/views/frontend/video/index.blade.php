@extends('frontend.layouts.app')

{{-- @section('subTitle', 'Dashboard') --}}
@section('content')
    <div id="services" class="services section">
        <!-- What people say slider: Start -->
        <div class="container">
            <div class="card mt-3 mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-body">

                    <div class="row">
                        @foreach ($data as $item)
                            <div class="col-md-4  text-center">
                                <iframe src="https://www.youtube.com/embed/{{ $item->link }}" frameborder="0"
                                    allowfullscreen></iframe>
                                <h4 class="text-center" style="background-color: rgb(0, 0, 0)">{{ $item->name }}</h4>
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
