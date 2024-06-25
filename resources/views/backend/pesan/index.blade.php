@extends('backend.layouts.main')
@section('subTitle', 'halaman pesan web')
@section('content')
    @include('backend.layouts.toastr.message')

    <div class="card">

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-nowrap text-center">
                            <th>no</th>
                            <th>nama</th>
                            <th>email</th>
                            <th>subject</th>
                            <th>pesan</th>
                            <th>status</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td class="text-wrap">{{ $item->subject }}</td>
                                <td class="text-wrap"> {{ $item->pesan }}</td>
                                <td>
                                    @if ($item->status == 0)
                                        <span class="badge bg-info">Belum di baca</span>
                                    @else
                                        <span class="badge bg-success">Sudah di baca</span>
                                    @endif
                                </td>
                                <td width="17%" class="">
                                    <form action="{{ url('/admin/pesan/' . $item->id) }}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="status" value="1">
                                        <button type="submit" class="btn btn-outline-success float-end">Baca</button>
                                    </form>
                                    <a href="{{ url('/admin/pesan/hapus/'.$item->id) }}" class=" btn  btn-outline-danger"><i class='ti ti-trash'></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
