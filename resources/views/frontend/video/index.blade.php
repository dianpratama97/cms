@extends('frontend.layouts.app')

{{-- @section('subTitle', 'Dashboard') --}}
@section('content')
    <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
            <div class="container">
                <h3 class="text-center mb-4" style="margin-top: -4%">
                    <span class="position-relative fw-bold z-1">VIDEO SEKOLAH
                        <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                    </span>
                </h3>
                <div class="card mt-3 mb-3"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
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
    </section>
@endsection
