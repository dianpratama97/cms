@extends('frontend.layouts.app')

{{-- @section('subTitle', 'Dashboard') --}}
@section('content')
    <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
            <h3 class="text-center mb-4" style="margin-top: -4%">
                <span class="position-relative fw-bold z-1">GALLERY SEKOLAH
                    <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                        alt="laptop charging"
                        class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                </span>
            </h3>
            <div class="container">
                <div class="card mt-3 mb-3"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
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
    </section>
@endsection
