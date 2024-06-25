@extends('frontend.layouts.app')

{{-- @section('subTitle', 'Dashboard') --}}
@section('content')
    <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
            <h3 class="text-center mb-4" style="margin-top: -4%">
                <span class="position-relative fw-bold z-1">UPLOAD NILAI MAGANG SISWA
                    <img src="{{ asset('frontend') }}/assets/img/front-pages/icons/section-title-icon.png"
                        alt="laptop charging" class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                </span>
            </h3>
            <div class="container">
                <div class="card mt-3 mb-3"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <form action="{{ route('nilai.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama Siswa</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}">
                                            @error('name')
                                                <small class='text-danger'>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nisn" class="form-label">NISN Siswa</label>
                                            <input type="text" class="form-control @error('nisn') is-invalid @enderror"
                                                id="nisn" name="nisn" value="{{ old('nisn') }}">
                                            @error('nisn')
                                                <small class='text-danger'>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="jurusan" class="form-label">Jurusan Siswa</label>
                                            <select name="jurusan" id="jurusan"
                                                class="form-control @error('jurusan') is-invalid @enderror">
                                                <option value="">--pilih--</option>
                                                <option value="TKJ">Teknik Komputer dan Jaringan</option>
                                                <option value="TSM">Teknik Sepeda Motor</option>
                                                <option value="LP">Layanan Perbankan</option>
                                                <option value="DKV">Desain Komunikasi Visual</option>
                                            </select>
                                            @error('jurusan')
                                                <small class='text-danger'>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Upload Nilai Siswa</label>
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                id="image" name="image">
                                            <small class="text-danger">Upload File Foto, Maksimas 5Mb</small>
                                            @error('image')
                                                <small class='text-danger'>{{ $message }}</small>
                                            @enderror
                                            <br>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-danger">Batal</button>
                            <button type="submit" class="btn btn-outline-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
