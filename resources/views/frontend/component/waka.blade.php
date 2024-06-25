<section id="landingTeam" class="section-py landing-team">
    <div class="container">
        <h3 class="text-center mb-4" style="margin-top: -5%">
            <span class="position-relative fw-bold z-1">WAKIL KEPALA SEKOLAH SMKN 1 SINGKEP
                <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                    alt="laptop charging" class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
        </h3>

        <div class="row gy-5 mt-2">
            <div class="col-lg-3 col-sm-6">
                <div class="card mt-3 mt-lg-0 shadow-none">
                    <div class="bg-label-info position-relative team-image-box">
                        <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_waka_humas) }}"
                            class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                            alt="human image" />
                    </div>
                    <div class="card-body border border-top-0 border-label-primary text-center">
                        <h5 class="card-title mb-0">{{ $config->name_humas }}</h5>
                        <p class="text-muted mb-0">Wakil Kepala Sekolah Bidang Hubungan Masyarakat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card mt-3 mt-lg-0 shadow-none">
                    <div class="bg-label-danger position-relative team-image-box">
                        <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_waka_kurikulum) }}"
                            class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                            alt="human image" />
                    </div>
                    <div class="card-body border border-top-0 border-label-primary text-center">
                        <h5 class="card-title mb-0">{{ $config->name_kurikulum }}</h5>
                        <p class="text-muted mb-0">Wakil Kepala Sekolah Bidang Kurikulum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card mt-3 mt-lg-0 shadow-none">
                    <div class="bg-label-warning position-relative team-image-box">
                        <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_waka_kesiswaan) }}"
                            class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                            alt="human image" />
                    </div>
                    <div class="card-body border border-top-0 border-label-primary text-center">
                        <h5 class="card-title mb-0">{{ $config->name_kesiswaan }}</h5>
                        <p class="text-muted mb-0">Wakil Kepala Sekolah Bidang Kesiswaan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card mt-3 mt-lg-0 shadow-none">
                    <div class="bg-label-success position-relative team-image-box">
                        <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_waka_sapras) }}"
                            class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                            alt="human image" />
                    </div>
                    <div class="card-body border border-top-0 border-label-primary text-center">
                        <h5 class="card-title mb-0">{{ $config->name_sapras }}</h5>
                        <p class="text-muted mb-0">Wakil Kepala Sekolah Bidang Sarana dan Prasarana</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
