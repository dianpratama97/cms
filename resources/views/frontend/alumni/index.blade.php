@extends('frontend.layouts.app')

{{-- @section('subTitle', 'Dashboard') --}}
@section('content')
    <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
            <div class="container">
                {{-- area error --}}
                @if ($errors->all())
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header">
                            <h3 class="text-center text-danger">FORM ANDA TIDAK LENGKAP</h3>
                        </div>
                        <div class="card-body text-center">
                            <h3>Periksa Kembali Data Yang Anda Masukan</h3>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        {{-- area 1 --}}
                        <div class="card mt-3"
                            style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="card-header">
                                <h4 class="text-center">HALAMAN PENDATAAN ALUMNI SMK NEGERI 1 SINGKEP</h4>
                            </div>
                            <div class="card-body">
                                <div style="text-align: justify;">
                                    <p>Penelusuran Lulusan/Alumni bertujuan untuk mengetahui dan memetakan kegiatan
                                        lulusan/alumni
                                        baik di
                                        Dunia Kerja/Industri atau Pendidikan di tingkat Universitas atau Perguruan Tinggi.
                                        Hasil
                                        data
                                        tersebut diharapkan dapat memetakan kesenjangan kompetensi lulusan terhadap tuntutan
                                        Dunia
                                        Kerja/Industri serta untuk mengetahui penyerapan,proses dan posisi lulusan SMK
                                        Negeri 1
                                        Singkep.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{-- area 2 --}}
                        <div class="card mt-3"
                            style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="card-header">
                                <h4 class="text-center">PETUNJUK PENGISIAN FOLMULIR</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <ol class="m-4">
                                        <li>Mengisi identitas diri atau alumni.</li>
                                        <li>Bagi yang sedang bekerja pilih Menu Sedang Bekerja</li>
                                        <li>Bagi yang sedang melanjutkan pendidikan/kuliah pilih Menu Sedang Kuliah</li>
                                        <li>Bagi yang sedang bekerja berwirausaha pilih Menu Sedang Berwirausaha</li>
                                        <li>Bagi yang belum bekerja atau kuliah pilih Menu Belum Berkarja/Kuliah</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                {{-- area 3 --}}
                <div class="card mt-3 mb-3"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="card-header">
                        <h3 class="text-center">MENU PENGISIAN FOLMULIR</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-3 col-lg-3">
                                <div class="card bg-info text-white text-center mb-3">
                                    <div class="card-body">
                                        <h5 class="text-white">Menu Sedang Bekerja</h5>
                                        <button type="button" class="btn btn-secondary " data-bs-toggle="modal"
                                            data-bs-target="#modal1" style="background-color: floralwhite; color:black">KLIK SAYA
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="card bg-primary text-white text-center mb-3">
                                    <div class="card-body">
                                        <h5 class="text-white">Menu Sedang Kuliah</h5>
                                        <button type="button" class="btn btn-secondary " data-bs-toggle="modal"
                                            data-bs-target="#modal2" style="background-color: floralwhite; color:black">KLIK SAYA
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="card bg-warning text-white text-center mb-3">
                                    <div class="card-body">
                                        <h5 class="text-white">Menu Sedang Berwirausaha</h5>
                                        <button type="button" class="btn btn-secondary " data-bs-toggle="modal"
                                            data-bs-target="#modal3" style="background-color: floralwhite; color:black">KLIK SAYA
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="card bg-success text-white text-center mb-3">
                                    <div class="card-body">
                                        <h5 class="text-white">Menu Belum Bekerja/Kuliah</h5>
                                        <button type="button" class="btn btn-secondary " data-bs-toggle="modal"
                                            data-bs-target="#modal4" style="background-color: floralwhite; color:black">KLIK SAYA
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    @include('frontend.alumni.modal')
@endsection
