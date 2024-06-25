<section id="landingFeatures" class="section-py landing-features">
    <div class="container">
        <h3 class="text-center mb-1">
            <span class="position-relative fw-bold z-1">KEPALA SEKOLAH SMKN 1 SINGKEP
                <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                    alt="laptop charging" class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
        </h3>
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-body">
                        <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_kepsek) }}" style="width: 56%; height: 100%; margin-left: 25%; border-radius: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-body" style="text-align: justify;">
                        {!! $config->sambutan_kepsek !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
