<section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
    <!-- What people say slider: Start -->
    <div class="container">
        <h3 class="text-center mb-4" style="margin-top: -5%">
            <span class="position-relative fw-bold z-1">JURUSAN SMKN 1 SINGKEP
                <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                    alt="laptop charging" class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
        </h3>
        <div class="row align-items-center gx-0 gy-4 g-lg-5">

            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="border-radius: 30px">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_jurusan_1) }}"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_jurusan_2) }}"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_jurusan_3) }}"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_jurusan_4) }}"
                                    class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
