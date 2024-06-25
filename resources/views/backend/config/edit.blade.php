@extends('backend.layouts.main')
@section('subTitle', 'halaman view web')
@section('content')
    @include('backend.layouts.toastr.message')

    <div class="card">
        <form action="{{ url('/admin/config/' . $config->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-header">
                <input type="hidden" name="old_foto" value="{{ $config->foto }}">
                <input type="hidden" name="old_logo" value="{{ $config->logo }}">
                <input type="hidden" name="old_cap_sekolah" value="{{ $config->cap_sekolah }}">
                <input type="hidden" name="old_ttd_kepsek" value="{{ $config->ttd_kepsek }}">
                <input type="hidden" name="old_foto_kepsek" value="{{ $config->foto_kepsek }}">
                <input type="hidden" name="old_foto_jurusan_1" value="{{ $config->foto_jurusan_1 }}">
                <input type="hidden" name="old_foto_jurusan_2" value="{{ $config->foto_jurusan_2 }}">
                <input type="hidden" name="old_foto_jurusan_3" value="{{ $config->foto_jurusan_3 }}">
                <input type="hidden" name="old_foto_jurusan_4" value="{{ $config->foto_jurusan_4 }}">
                <input type="hidden" name="old_foto_waka_humas" value="{{ $config->foto_waka_humas }}">
                <input type="hidden" name="old_foto_waka_kesiswaan" value="{{ $config->foto_waka_kesiswaan }}">
                <input type="hidden" name="old_foto_waka_kurikulum" value="{{ $config->foto_waka_kurikulum }}">
                <input type="hidden" name="old_foto_waka_sapras" value="{{ $config->foto_waka_sapras }}">
            </div>

            {{-- tabel 1 --}}
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>nama web</th>
                                <th>foto sekolah</th>
                                <th>logo web</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td width="20%">
                                    <input class="form-control @error('app_name') is-invalid @enderror" type="text"
                                        name="app_name" value="{{ old('app_name', $config->app_name) }}" id="app_name">
                                    @error('app_name')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                                <td width="40%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('foto') is-invalid @enderror" type="file"
                                                name="foto" value="{{ old('foto', $config->foto) }}" id="foto"
                                                onchange="p_fotoSekolah()">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto) }}"
                                                width="70%" id="foto_sekolah">
                                        </div>
                                        @error('foto')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror

                                    </div>
                                </td>
                                <td width="40%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                                name="logo" value="{{ old('logo', $config->logo) }}" id="logo"
                                                onchange="p_logoSekolah()">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->logo) }}"
                                                width="70%" id="logo_sekolah">
                                        </div>
                                        @error('logo')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            {{-- tabel 2 --}}
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>link e-rapor</th>
                                <th>link soal</th>
                                <th>link akademik</th>
                                <th>link elearning</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><input class="form-control @error('link_erapor') is-invalid @enderror" type="text"
                                        name="link_erapor" value="{{ old('link_erapor', $config->link_erapor) }}"
                                        id="link_erapor">
                                    @error('link_erapor')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                                <td><input class="form-control @error('link_soal') is-invalid @enderror" type="text"
                                        name="link_soal" value="{{ old('link_soal', $config->link_soal) }}" id="link_soal">
                                    @error('link_soal')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                                <td><input class="form-control @error('link_akademik') is-invalid @enderror" type="text"
                                        name="link_akademik" value="{{ old('link_akademik', $config->link_akademik) }}"
                                        id="link_akademik">
                                    @error('link_akademik')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                                <td><input class="form-control @error('link_elearning') is-invalid @enderror"
                                        type="text" name="link_elearning"
                                        value="{{ old('link_elearning', $config->link_elearning) }}" id="link_elearning">
                                    @error('link_elearning')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            {{-- tabel 3 --}}
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>foto kepala sekolah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="100%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('foto_kepsek') is-invalid @enderror"
                                                type="file" name="foto_kepsek"
                                                value="{{ old('foto_kepsek', $config->foto_kepsek) }}" id="foto_kepsek"
                                                onchange="p_kepsekSekolah()">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_kepsek) }}"
                                                width="50%" id="foto_kepsek_sekolah">
                                        </div>
                                        @error('foto_kepsek')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>nama kepala sekolah</th>
                                <th>nip kepala sekolah</th>
                                <th>cap sekolah</th>
                                <th>Tanda tangan sekolah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input class="form-control @error('nama_kepsek') is-invalid @enderror" type="text"
                                        name="nama_kepsek" value="{{ old('nama_kepsek', $config->nama_kepsek) }}"
                                        id="nama_kepsek">
                                    @error('nama_kepsek')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                                <td>
                                    <input class="form-control @error('nip') is-invalid @enderror" type="text"
                                        name="nip" value="{{ old('nip', $config->nip) }}" id="nip">
                                    @error('nip')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('cap_sekolah') is-invalid @enderror"
                                                type="file" name="cap_sekolah"
                                                value="{{ old('cap_sekolah', $config->cap_sekolah) }}" id="cap_sekolah"
                                                onchange="p_capSekolah()">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->cap_sekolah) }}"
                                                width="50%" id="capSekolah">
                                        </div>
                                        @error('cap_sekolah')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('ttd_kepsek') is-invalid @enderror"
                                                type="file" name="ttd_kepsek"
                                                value="{{ old('ttd_kepsek', $config->ttd_kepsek) }}" id="ttd_kepsek"
                                                onchange="p_ttdKepsek()">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->ttd_kepsek) }}"
                                                width="50%" id="ttdKepsek">
                                        </div>
                                        @error('ttd_kepsek')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <tr>
                            <td>Sambutan</td>
                            <td>
                                <textarea class=" @error('sambutan_kepsek') is-invalid @enderror" name="sambutan_kepsek" id="editorKepsek">{!! $config->sambutan_kepsek !!}</textarea>
                                @error('sambutan_kepsek')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Visi</td>
                            <td>
                                <textarea class=" @error('visi') is-invalid @enderror" name="visi" id="editorVisi">{!! $config->visi !!}</textarea>
                                @error('visi')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Misi</td>
                            <td>
                                <textarea class=" @error('misi') is-invalid @enderror" name="misi" id="editorMisi">{!! $config->misi !!}</textarea>
                                @error('misi')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            {{-- tabel 4 --}}
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>foto jurusan</th>
                                <th>nama jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="50%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('foto_jurusan_1') is-invalid @enderror"
                                                type="file" name="foto_jurusan_1"
                                                value="{{ old('foto_jurusan_1', $config->foto_jurusan_1) }}"
                                                id="foto_jurusan_1" onchange="p_jurusan1()">
                                            <small class="text-danger">Ukuran 1922 X 700 pixel</small>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_jurusan_1) }}"
                                                width="70%" id="foto_jurusan1">
                                        </div>
                                        @error('foto_jurusan_1')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="name_jurusan_1">Jurusan 1</label>
                                    <input class="form-control @error('name_jurusan_1') is-invalid @enderror"
                                        type="text" name="name_jurusan_1"
                                        value="{{ old('name_jurusan_1', $config->name_jurusan_1) }}" id="name_jurusan_1">
                                    @error('name_jurusan_1')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td width="50%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('foto_jurusan_2') is-invalid @enderror"
                                                type="file" name="foto_jurusan_2"
                                                value="{{ old('foto_jurusan_2', $config->foto_jurusan_2) }}"
                                                id="foto_jurusan_2" onchange="p_jurusan2()">
                                            <small class="text-danger">Ukuran 1922 X 700 pixel</small>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_jurusan_2) }}"
                                                width="70%" id="foto_jurusan2">
                                        </div>
                                        @error('foto_jurusan_2')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="name_jurusan_2">Jurusan 2</label>
                                    <input class="form-control @error('name_jurusan_2') is-invalid @enderror"
                                        type="text" name="name_jurusan_2"
                                        value="{{ old('name_jurusan_2', $config->name_jurusan_2) }}" id="name_jurusan_2">
                                    @error('name_jurusan_2')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td width="50%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('foto_jurusan_3') is-invalid @enderror"
                                                type="file" name="foto_jurusan_3"
                                                value="{{ old('foto_jurusan_3', $config->foto_jurusan_3) }}"
                                                id="foto_jurusan_3" onchange="p_jurusan3()">
                                            <small class="text-danger">Ukuran 1922 X 700 pixel</small>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_jurusan_3) }}"
                                                width="70%" id="foto_jurusan3">
                                        </div>
                                        @error('foto_jurusan_3')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="name_jurusan_3">Jurusan 3</label>
                                    <input class="form-control @error('name_jurusan_3') is-invalid @enderror"
                                        type="text" name="name_jurusan_3"
                                        value="{{ old('name_jurusan_3', $config->name_jurusan_3) }}" id="name_jurusan_3">
                                    @error('name_jurusan_3')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td width="50%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('foto_jurusan_4') is-invalid @enderror"
                                                type="file" name="foto_jurusan_4"
                                                value="{{ old('foto_jurusan_4', $config->foto_jurusan_4) }}"
                                                id="foto_jurusan_4" onchange="p_jurusan4()">
                                            <small class="text-danger">Ukuran 1922 X 700 pixel</small>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_jurusan_4) }}"
                                                width="70%" id="foto_jurusan4">
                                        </div>
                                        @error('foto_jurusan_4')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="name_jurusan_4">Jurusan 4</label>
                                    <input class="form-control @error('name_jurusan_4') is-invalid @enderror"
                                        type="text" name="name_jurusan_4"
                                        value="{{ old('name_jurusan_4', $config->name_jurusan_4) }}" id="name_jurusan_4">
                                    @error('name_jurusan_4')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            {{-- tabel 5 --}}
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>foto wakil kepala sekolah</th>
                                <th>nama wakil kepala sekolah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="50%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('foto_waka_humas') is-invalid @enderror"
                                                type="file" name="foto_waka_humas"
                                                value="{{ old('foto_waka_humas', $config->foto_waka_humas) }}"
                                                id="foto_waka_humas" onchange="p_wakaHumas()">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_waka_humas) }}"
                                                width="70%" id="foto_wakaHumas">
                                        </div>
                                        @error('foto_waka_humas')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="name_humas">Nama Waka Humas</label>
                                    <input class="form-control @error('name_humas') is-invalid @enderror" type="text"
                                        name="name_humas" value="{{ old('name_humas', $config->name_humas) }}"
                                        id="name_humas">
                                    @error('name_humas')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td width="50%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('foto_waka_kesiswaan') is-invalid @enderror"
                                                type="file" name="foto_waka_kesiswaan"
                                                value="{{ old('foto_waka_kesiswaan', $config->foto_waka_kesiswaan) }}"
                                                id="foto_waka_kesiswaan" onchange="p_wakaKesiswaan()">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_waka_kesiswaan) }}"
                                                width="70%" id="foto_wakaKesiswaan">
                                        </div>
                                        @error('foto_waka_kesiswaan')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="name_kesiswaan">Nama Waka Kesiswaan</label>
                                    <input class="form-control @error('name_kesiswaan') is-invalid @enderror"
                                        type="text" name="name_kesiswaan"
                                        value="{{ old('name_kesiswaan', $config->name_kesiswaan) }}" id="name_kesiswaan">
                                    @error('name_kesiswaan')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td width="50%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('foto_waka_kurikulum') is-invalid @enderror"
                                                type="file" name="foto_waka_kurikulum"
                                                value="{{ old('foto_waka_kurikulum', $config->foto_waka_kurikulum) }}"
                                                id="foto_waka_kurikulum" onchange="p_wakaKurikulum()">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_waka_kurikulum) }}"
                                                width="70%" id="foto_wakaKurikulum">
                                        </div>
                                        @error('foto_waka_kurikulum')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="name_kurikulum">Nama Waka Kurikulum</label>
                                    <input class="form-control @error('name_kurikulum') is-invalid @enderror"
                                        type="text" name="name_kurikulum"
                                        value="{{ old('name_kurikulum', $config->name_kurikulum) }}" id="name_kurikulum">
                                    @error('name_kurikulum')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td width="50%">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control @error('foto_waka_sapras') is-invalid @enderror"
                                                type="file" name="foto_waka_sapras"
                                                value="{{ old('foto_waka_sapras', $config->foto_waka_sapras) }}"
                                                id="foto_waka_sapras" onchange="p_wakaSapras()">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/gambar/backend/config/' . $config->foto_waka_sapras) }}"
                                                width="70%" id="foto_wakaSapras">
                                        </div>
                                        @error('foto_waka_sapras')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="name_sapras">Nama Waka Sapras</label>
                                    <input class="form-control @error('name_sapras') is-invalid @enderror" type="text"
                                        name="name_sapras" value="{{ old('name_sapras', $config->name_sapras) }}"
                                        id="name_sapras">
                                    @error('name_sapras')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            {{-- tabel 6 --}}
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>alamat</th>
                                <th>email</th>
                                <th>nomor hp</th>
                                <th>fb sekolah</th>
                                <th>ig sekolah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control @error('alamat') is-invalid @enderror" type="text"
                                        name="alamat" value="{{ old('alamat', $config->alamat) }}" id="alamat">
                                    @error('alamat')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                                <td><input class="form-control @error('email') is-invalid @enderror" type="text"
                                        name="email" value="{{ old('email', $config->email) }}" id="email">
                                    @error('email')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                                <td><input class="form-control @error('no_telp') is-invalid @enderror" type="text"
                                        name="no_telp" value="{{ old('no_telp', $config->no_telp) }}" id="no_telp">
                                    @error('no_telp')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                                <td><input class="form-control @error('fb') is-invalid @enderror" type="text"
                                        name="fb" value="{{ old('fb', $config->fb) }}" id="fb">
                                    @error('fb')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                                <td><input class="form-control @error('ig') is-invalid @enderror" type="text"
                                        name="ig" value="{{ old('ig', $config->ig) }}" id="ig">
                                    @error('ig')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                <a href="{{ url('/admin/config') }}" class="btn btn-outline-primary">Kembali</a>
                <button type="submit" class="btn btn-outline-success">Siman</button>
            </div>
        </form>
    </div>

@endsection
@push('js')
    <script src="{{ asset('backend/assets') }}/ckeditor/ckeditor.js"></script>
@endpush
@push('js-ext')
    <script>
        //image preview
        function p_capSekolah() {
            capSekolah.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_ttdKepsek() {
            ttdKepsek.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_fotoSekolah() {
            foto_sekolah.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_logoSekolah() {
            logo_sekolah.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_kepsekSekolah() {
            foto_kepsek_sekolah.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_jurusan1() {
            foto_jurusan1.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_jurusan2() {
            foto_jurusan2.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_jurusan3() {
            foto_jurusan3.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_jurusan4() {
            foto_jurusan4.src = URL.createObjectURL(event.target.files[0]);
        }

        //foto waka
        function p_wakaHumas() {
            foto_wakaHumas.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_wakaKesiswaan() {
            foto_wakaKesiswaan.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_wakaKurikulum() {
            foto_wakaKurikulum.src = URL.createObjectURL(event.target.files[0]);
        }

        function p_wakaSapras() {
            foto_wakaSapras.src = URL.createObjectURL(event.target.files[0]);
        }

        //ckEditor
        CKEDITOR.replace('editorKepsek');
        CKEDITOR.replace('editorVisi');
        CKEDITOR.replace('editorMisi');
    </script>
@endpush
