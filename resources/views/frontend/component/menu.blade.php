<section id="landingFunFacts" class="section-py landing-fun-facts">
    <div class="container">
        <h3 class="text-center mb-4" style="margin-top: -40px">
            <span class="position-relative fw-bold z-1">MENU WEBSITE SMKN 1 SINGKEP
                <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                    alt="laptop charging" class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
        </h3>
        <div class="row gy-3 justify-content-center">
            <div class="col-md-2">
                <div class="card border border-label-primary shadow-none">
                    <a href="{{ $config->link_erapor }}">
                        <div class="card-body text-center">
                            <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/check.png" alt="laptop"
                                class="mb-2" />
                            <h5 class="h4 mb-1"> e-Raport</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card border border-label-success shadow-none">
                    <a href="{{ $config->link_soal }}">
                        <div class="card-body text-center">
                            <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/laptop.png" alt="laptop"
                                class="mb-2" />
                            <h5 class="h4 mb-1"> e-Ujian</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card border border-label-info shadow-none">
                    <a href="{{ $config->link_akademik }}">
                        <div class="card-body text-center">
                            <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/paper.png" alt="laptop"
                                class="mb-2" />
                            <h5 class="h4 mb-1"> e-Akademik</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card border border-label-danger shadow-none">
                    <a href="{{ route('alumni.blog') }}">
                        <div class="card-body text-center">
                            <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/user.png" alt="laptop"
                                class="mb-2" />
                            <h5 class="h4 mb-1"> e-Alumni</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card border border-label-warning shadow-none">
                    <a href="{{ $config->link_elearning }}">
                        <div class="card-body text-center">
                            <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/rocket.png" alt="laptop"
                                class="mb-2" />
                            <h5 class="h4 mb-1"> e-Learning</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card border border-label-info shadow-none">
                    <a href="{{ route('nilai.index') }}">
                        <div class="card-body text-center">
                            <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/keyboard.png" alt="laptop"
                                class="mb-2" />
                            <h5 class="h4 mb-1"> e-Magang</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>
