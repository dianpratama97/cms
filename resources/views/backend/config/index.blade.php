@extends('backend.layouts.main')
@section('subTitle', 'halaman view web')
@section('content')
    @include('backend.layouts.toastr.message')

    <div class="card">
       
        <div class="card-header">
            <a href="{{ url('/admin/config/' . $id->id . '/edit') }}" class="btn btn-outline-success">Edit Pengaturan</a>
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
                        @foreach ($data as $item)
                            <tr>
                                <td width="20%">{{ $item->app_name }}</td>
                                <td width="40%">
                                    <img src="{{ asset('storage/gambar/backend/config/' . $item->foto) }}"
                                        alt="foto" width="20%">
                                </td>
                                <td width="20%">
                                    <img src="{{ asset('storage/gambar/backend/config/' . $item->logo) }}"
                                        alt="foto" width="20%">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-nowrap text-center">
                            <th>cap</th>
                            <th>ttd</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                               
                                <td width="20%">
                                    <img src="{{ asset('storage/gambar/backend/config/' . $item->cap_sekolah) }}"
                                        alt="foto" width="20%">
                                </td>
                                <td width="20%">
                                    <img src="{{ asset('storage/gambar/backend/config/' . $item->ttd_kepsek) }}"
                                        alt="foto" width="20%">
                                </td>
                            </tr>
                        @endforeach
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
                            <th>link elearnig</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->link_erapor }}</td>
                                <td>{{ $item->link_soal }}</td>
                                <td>{{ $item->link_akademik }}</td>
                                <td>{{ $item->link_elearning }}</td>
                            </tr>
                        @endforeach
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
                            <th>nama kepala sekolah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td width="30%">
                                    <img src="{{ asset('storage/gambar/backend/config/' . $item->foto_kepsek) }}"
                                        alt="foto" width="30%">
                                </td>
                                <td>{!! $item->nama_kepsek !!}</td>
                            </tr>
                            <tr>
                                <td width="30%">Sambutan Kepala Sekolah</td>
                                <td class="text-wrap" style="width: 70%">{!! $item->sambutan_kepsek !!}</td>
                            </tr>
                            <tr>
                                <td width="30%">Visi Sekolah</td>
                                <td class="text-wrap" style="width: 70%">{!! $item->visi !!}</td>
                            </tr>
                            <tr>
                                <td width="30%">Misi Sekolah</td>
                                <td class="text-wrap" style="width: 70%">{!! $item->misi !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
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
                        @foreach ($data as $item)
                            <tr>
                                <td width="30%">
                                    <img src="{{ asset('storage/gambar/backend/config/' . $item->foto_jurusan_1) }}"
                                        alt="foto" width="30%">
                                </td>
                                <td>{!! $item->name_jurusan_1 !!}</td>
                            </tr>
                            <tr>
                                <td width="30%">
                                    <img src="{{ asset('storage/gambar/backend/config/' . $item->foto_jurusan_2) }}"
                                        alt="foto" width="30%">
                                </td>
                                <td>{!! $item->name_jurusan_2 !!}</td>
                            </tr>
                            <tr>
                                <td width="30%">
                                    <img src="{{ asset('storage/gambar/backend/config/' . $item->foto_jurusan_3) }}"
                                        alt="foto" width="30%">
                                </td>
                                <td>{!! $item->name_jurusan_3 !!}</td>
                            </tr>
                            <tr>
                                <td width="30%">
                                    <img src="{{ asset('storage/gambar/backend/config/' . $item->foto_jurusan_4) }}"
                                        alt="foto" width="30%">
                                </td>
                                <td>{!! $item->name_jurusan_4 !!}</td>
                            </tr>
                        @endforeach
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
                            <td width="30%">
                                <img src="{{ asset('storage/gambar/backend/config/' . $item->foto_waka_humas) }}"
                                    alt="foto" width="30%">
                            </td>
                            <td>{!! $item->name_humas !!}</td>
                        </tr>
                        <tr>
                            <td width="30%">
                                <img src="{{ asset('storage/gambar/backend/config/' . $item->foto_waka_kesiswaan) }}"
                                    alt="foto" width="30%">
                            </td>
                            <td>{!! $item->name_kesiswaan !!}</td>
                        </tr>
                        <tr>
                            <td width="30%">
                                <img src="{{ asset('storage/gambar/backend/config/' . $item->foto_waka_kurikulum) }}"
                                    alt="foto" width="30%">
                            </td>
                            <td>{!! $item->name_kurikulum !!}</td>
                        </tr>
                        <tr>
                            <td width="30%">
                                <img src="{{ asset('storage/gambar/backend/config/' . $item->foto_waka_sapras) }}"
                                    alt="foto" width="30%">
                            </td>
                            <td>{!! $item->name_sapras !!}</td>
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
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->fb }}</td>
                                <td>{{ $item->ig }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
