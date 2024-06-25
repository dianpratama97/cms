@extends('frontend.layouts.app')
{{-- @section('subTitle', 'Dashboard') --}}
@section('content')
    <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
            <div class="container">
                <h3 class="text-center mb-4" style="margin-top: -4%">
                    <span class="position-relative fw-bold z-1" >BACA BERITA
                        <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                    </span>
                </h3>
                <div class="card mt-3 mb-3"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="row">
                    <div class="col-lg-7">
                        <!-- Featured blog post-->
                        <div class="card m-4 shadow-sm">
                            <a href="{{ url('p/' . $article->slug) }}"><img class="card-img-top single-image"
                                    src="{{ asset('storage/gambar/backend/article/' . $article->img) }}" alt="foto.jpg"
                                    width="40%" /></a>
                            <div class="card-body">
                                <div class="small text-muted">Di tambahkan pada: {{ $article->created_at->format('d-M-Y') }}
                                </div>
                                <div class="small text-muted">{{ $article->views }} Lihat</div>
                                <h2 class="card-title">{{ $article->title }}</h2>
                                <p class="card-text">{!! $article->desc !!}</p>
                                <a class="btn btn-primary" href="{{ url('artikel') }}">Kembali →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Side widgets-->
                        @include('frontend.layouts.side')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
