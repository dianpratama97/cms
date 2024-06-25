<footer class="landing-footer bg-body footer-text">
    <div class="footer-top position-relative overflow-hidden z-1">
        <img src="{{ asset('frontend') }}/assets/img/front-pages/backgrounds/footer-bg-light.png" alt="footer bg"
            class="footer-bg banner-bg-img z-n1" data-app-light-img="front-pages/backgrounds/footer-bg-light.png"
            data-app-dark-img="front-pages/backgrounds/footer-bg-dark.png" />
        <div class="container">
            <h1 class="text-center text-white">{{ pengaturan()->app_name }}</h1>
            <h6 class="text-center text-white">{{ pengaturan()->alamat }}</h6>
        </div>
    </div>
    <div class="footer-bottom py-3">
        <div
            class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
            <div class="mb-2 mb-md-0">
                <span class="footer-text">©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </span>
                <a href="https://pixinvent.com" target="_blank" class="fw-medium text-white footer-link">DIMEDIA27,</a>
                <span class="footer-text"> Dibuat Oleh: Dian Pratama, S.Pd.</span>
            </div>

        </div>
    </div>
</footer>
