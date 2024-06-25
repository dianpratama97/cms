<section id="landingPricing" class="section-py bg-body landing-pricing">
    <div class="container">
        <h3 class="text-center mb-4" style="margin-top: -5%">
            <span class="position-relative fw-bold z-1">VISI DAN MISI SMKN 1 SINGKEP
                <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                    alt="laptop charging" class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
        </h3>

        <div class="row gy-4 pt-lg-3">
            <!-- visi Plan: Start -->
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/paper-airplane.png"
                                alt="paper airplane icon" class="mb-4 pb-2" />
                            <h4 class="mb-1">VISI</h4>

                        </div>
                    </div>
                    <div class="card-body">
                        {!! $config->visi !!}
                    </div>
                </div>
            </div>
            <!-- visi Plan: End -->

            <!-- misi Plan: Start -->
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/paper-airplane.png"
                                alt="paper airplane icon" class="mb-4 pb-2" />
                            <h4 class="mb-1">MISI</h4>

                        </div>
                    </div>
                    <div class="card-body">
                        {!! $config->misi !!}
                    </div>
                </div>
            </div>
            <!-- misi Plan: End -->

        </div>
    </div>
</section>
