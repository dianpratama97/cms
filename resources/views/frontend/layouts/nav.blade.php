<nav class="layout-navbar shadow-none py-0">
    <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
            <!-- Menu logo wrapper: Start -->
            <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
                <!-- Mobile menu toggle: Start-->
                <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="ti ti-menu-2 ti-sm align-middle"></i>
                </button>
                <!-- Mobile menu toggle: End-->
                <a href="" class="app-brand-link">
                    <span class=" demo">
                     <img src="{{ asset('storage/gambar/backend/config/' . pengaturan()->logo) }}" width="35px">
                    </span>
                    <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">{{ pengaturan()->app_name }}</span>
                </a>
            </div>
            <!-- Menu logo wrapper: End -->
            <!-- Menu wrapper: Start -->
            <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti ti-x ti-sm"></i>
                </button>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ Request::routeIs('welcome') ? 'active' : '' }}"
                            href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ Request::routeIs('artikel.blog') ? 'active' : '' }}"
                            href="{{ route('artikel.blog') }}">Berita Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ Request::routeIs('gallery.blog') ? 'active' : '' }}"
                            href="{{ route('gallery.blog') }}">Gallery Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ Request::routeIs('video.blog') ? 'active' : '' }}"
                            href="{{ route('video.blog') }}">Video Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ Request::routeIs('alumni.blog') ? 'active' : '' }}"
                            href="{{ route('alumni.blog') }}">Pendataan Alumni</a>
                    </li>
                </ul>
            </div>
            <div class="landing-menu-overlay d-lg-none"></div>
            <!-- Menu wrapper: End -->
            <!-- Toolbar: Start -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- navbar button: Start -->
                <li>
                    <a href="{{ route('login') }}" class="btn btn-primary" target="_blank"><span
                            class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span><span
                            class="d-none d-md-block">Login</span></a>
                </li>
                <!-- navbar button: End -->
            </ul>
            <!-- Toolbar: End -->
        </div>
    </div>
</nav>
