<section id="hero-animation">
    <div id="landingHero" class="section-py landing-hero position-relative">
        <img src="{{ asset('frontend') }}/assets/img/front-pages/backgrounds/hero-bg.png" alt="hero background"
            class="position-absolute top-0 start-50 translate-middle-x object-fit-contain w-100 h-100" data-speed="1" />
        <div class="container">
            <div class="hero-text-box text-center">
                <h1 class="text-primary hero-title display-6 fw-bold" style="font-size: 60px;">{{ $config->app_name }}
                </h1>
            </div>
        
        </div>
    </div>
    @include('frontend.component.menu')
</section>
