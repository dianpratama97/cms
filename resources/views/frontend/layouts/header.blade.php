<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('welcome') }}"
                                class="{{ Request::routeIs('welcome') ? 'active' : '' }}">Home</a></li>
                        <li class="scroll-to-section"><a href="{{ route('artikel.blog') }}"
                                class="{{ Request::routeIs('artikel.blog') ? 'active' : '' }}">Berita Sekolah</a></li>
                        <li class="scroll-to-section"><a href="{{ route('gallery.blog') }}"
                                class="{{ Request::routeIs('gallery.blog') ? 'active' : '' }}">Gallery</a></li>
                        <li class="scroll-to-section"><a href="{{ route('video.blog') }}"
                                class="{{ Request::routeIs('video.blog') ? 'active' : '' }}">Video</a></li>
                        <li class="scroll-to-section"><a href="{{ route('alumni.blog') }}"
                                class="{{ Request::routeIs('alumni.blog') ? 'active' : '' }}">Pendataan Alumni</a></li>
                        <li>
                            <div class="gradient-button"><a id="modal_trigger" href="#modal"><i
                                        class="fa fa-sign-in-alt"></i>Login</a></div>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>


{{-- area login --}}
<div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" autofocus />
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 form-password-toggle">
                <label for="email" class="form-label">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
            </div>
        </form>

    </section>
</div>
