@extends('frontend.layouts.app')


@section('content')
    <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
            <div class="container">
                <h3 class="text-center mb-4" style="margin-top: -4%">
                    <span class="position-relative fw-bold z-1">BERITA SEKOLAH
                        <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                    </span>
                </h3>
                <div class="card mt-3 mb-3"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                    <div class="row">
                        <div class="col-md-7">
                            <a href="{{ url('p/' . $latest_post->slug) }}"><img
                                    class="card-img-top featured-image m-4 shadow-lg"
                                    src="{{ asset('storage/gambar/backend/article/' . $latest_post->img) }}" alt="foto.jpg"
                                    width="20%" /></a>
                            <div class="card-body m-4">
                                <div class="small text-muted">{{ $latest_post->created_at->format('d-m-Y') }}</div>
                                <h2 class="card-title">{{ $latest_post->title }}</h2>
                                <p class="card-text">{{ Str::limit(strip_tags($latest_post->desc), 150, '...') }}</p>
                                <a class="btn btn-primary" href="{{ url('p/' . $latest_post->slug) }}">Lanjut Membaca →</a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            @include('frontend.layouts.side')
                        </div>
                    </div>

                    <div class="row m-4">
                        @forelse ($article as $item)
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4 shadow-sm">
                                    <a href="{{ url('/p/' . $item->slug) }}"><img class="card-img-top post-image"
                                            src="{{ asset('storage/gambar/backend/article/' . $item->img) }}"
                                            alt="..." /></a>
                                    <div class="card-body card-height">
                                        <div class="small text-muted">{{ $item->created_at->format('d-m-Y') }}</div>
                                        <div class="small badge bg-info text-white mb-3">{{ $item->Category->name }}
                                        </div>
                                        <h2 class="card-title h4">{{ $item->title }}</h2>
                                        <p class="card-text">{{ Str::limit(strip_tags($item->desc), 50, '...') }}</p>
                                        <a class="btn btn-primary" href="{{ url('/p/' . $item->slug) }}">Lanjut Baca
                                            →</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h3 class="text-center bg-danger badge">Artikel tidak di temukan</h3>
                        @endforelse
                    </div>
                    <div class="pagination justify-content-center my-4">
                        {{ $article->onEachSide(4)->links() }}
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
