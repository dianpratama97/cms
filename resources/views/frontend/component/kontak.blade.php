<section id="landingContact" class="section-py bg-body landing-contact">
    <div class="container">
        <h3 class="text-center mb-4" style="margin-top: -5%">
            <span class="position-relative fw-bold z-1">HUBUNGI KAMI
                <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                    alt="laptop charging" class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
        </h3>
        <div class="row gy-4">
            <div class="col-lg-5">
                <div class="contact-img-box position-relative border p-2 h-100">
                    <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/contact-border.png"
                        alt="contact border"
                        class="contact-border-img position-absolute d-none d-md-block scaleX-n1-rtl" />
                    <img src="{{ asset('storage/gambar/backend/config/' . $config->foto) }}"
                        class="contact-img w-100 scaleX-n1-rtl" />
                    <div class="pt-3 px-4 pb-1">
                        <div class="row gy-3 gx-md-4">
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-label-danger rounded p-2 me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail" width="44" height="44"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#fd0061" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                            <path d="M3 7l9 6l9 -6" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-0">Email</p>
                                        <h6 class="mb-0">
                                            <a href="#" class="text-heading">{{ $config->email }}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-label-success rounded p-2 me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-whatsapp" width="44"
                                            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path
                                                d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-0">Phone/WA</p>
                                        <h5 class="mb-0">
                                            <a href="https://wa.me/{{ $config->no_telp }}" target="_blank"
                                                class="text-heading">{{ $config->no_telp }}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-label-danger rounded p-2 me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-instagram" width="44"
                                            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                            <path d="M16.5 7.5l0 .01" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-0">Instagram</p>
                                        <h5 class="mb-0">
                                            <a href="" target="_blank" class="text-heading">{{ $config->ig }}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-label-info rounded p-2 me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-facebook" width="44"
                                            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-0">Facebook</p>
                                        <h5 class="mb-0">
                                            <a href="" target="_blank" class="text-heading">{{ $config->fb }}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-1">KIRIM PESAN</h4>
                        <p class="mb-4">
                            Silakan memasukan pesan anda di sini.
                        </p>
                        @if (session('message'))
                            <h6 class="alert alert-success">
                                {{ session('message') }}
                            </h6>
                        @endif
                        <form action="{{ route('pesan.user') }}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="contact-form-fullname">Nama Anda</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        id="contact-form-fullname" />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="contact-form-email">Email</label>
                                    <input type="text" name="email" id="contact-form-email"
                                        class="form-control @error('email') is-invalid @enderror" />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="contact-form-email">Subjek</label>
                                    <input type="text" name="subject" id="contact-form-email"
                                        class="form-control @error('subject') is-invalid @enderror" />
                                    @error('subject')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="contact-form-message">Pesan Kamu</label>
                                    <textarea id="contact-form-message" name="pesan" class="form-control @error('pesan') is-invalid @enderror"
                                        rows="8"></textarea>
                                    @error('pesan')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
