@extends('backend.layouts.main')
@section('subTitle', 'halaman detail article')
@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 20%">judul</th>
                    <td>{{ $article->title }}</td>
                </tr>
                <tr>
                    <th style="width: 20%">Kategori</th>
                    <td>{{ $article->Category->name }}</td>
                </tr>
                <tr>
                    <th style="width: 20%">Keterangan</th>
                    <td>{!! $article->desc !!}</td>
                </tr>
                <tr>
                    <th style="width: 20%">Gambar</th>
                    <th>
                        <a href="{{ asset('storage/gambar/backend/article/' . $article->img) }}" target="_blank"
                            rel="noopener">
                            <img src="{{ asset('storage/gambar/backend/article/' . $article->img) }}"
                                alt="{{ $article->img }}" width="20%">
                        </a>
                    </th>
                </tr>
                <tr>
                    <th style="width: 20%">Tanggal Publis</th>
                    <td>{{ $article->publish_date }}</td>
                </tr>
                <tr>
                    <th style="width: 20%">Views</th>
                    <td>{{ $article->views }} X Lihat</td>
                </tr>
                <tr>
                    <th style="width: 20%">Tanggal Publis</th>
                    @if ($article->status == 1)
                        <td><span class="badge bg-primary">Publish</span></td>
                    @else
                        <td><span class="badge bg-danger">Private</span></td>
                    @endif
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ url('/admin/article') }}" class="btn btn-outline-primary ">
                <i class='bx bx-arrow-back'></i>
                Kembali
            </a>
        </div>
    </div>

@endsection
