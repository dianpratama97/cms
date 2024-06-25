<table>
    <thead>
        <tr>
            <th bgcolor="green" width="30px">No</th>
            <th bgcolor="green" width="150px">Status Alumni</th>
            <th bgcolor="green" width="150px">Nama Lengkap</th>
            <th bgcolor="green" width="150px">NIS</th>
            <th bgcolor="green" width="150px">Kompetensi Keahlian</th>
            <th bgcolor="green" width="150px">Tahun Lulus</th>
            <th bgcolor="green" width="150px">Alamat</th>
            <th bgcolor="green" width="150px">Nomor Siswa</th>
            <th bgcolor="green" width="150px">Email</th>
            <th bgcolor="green" width="150px">Nama Tempat Kerja</th>
            <th bgcolor="green" width="150px">Alamat Tempat Kerja</th>
            <th bgcolor="green" width="150px">Sektor Tempat Kerja</th>
            <th bgcolor="green" width="150px">Posisi Tempat Kerja</th>
            <th bgcolor="green" width="150px">No Telepon Tempat Kerja</th>
            <th bgcolor="green" width="150px">Tahun Masuk</th>
            <th bgcolor="green" width="150px">Nama Universitas</th>
            <th bgcolor="green" width="150px">Fakultas</th>
            <th bgcolor="green" width="150px">Program Studi</th>
            <th bgcolor="green" width="150px">Jenjang Pendidikan</th>
            <th bgcolor="green" width="150px">Nama Usaha</th>
            <th bgcolor="green" width="150px">Alamat Tempat Usaha</th>
            <th bgcolor="green" width="150px">Bidang Usaha</th>
            <th bgcolor="green" width="150px">Jumlah Karyawan</th>
            <th bgcolor="green" width="150px">Nomor Telepon Tempat Usaha</th>
            <th bgcolor="green" width="150px">Kegiatan</th>
            <th bgcolor="green" width="150px">Lainya</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($alumni as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if ($item->status_alumni == 'belum_bekerja_kuliah')
                        Belum Bekerja/Kuliah
                    @elseif($item->status_alumni == 'bekerja')
                        Bekerja
                    @elseif($item->status_alumni == 'kuliah')
                        Kuliah
                    @else
                        Wirausaha
                    @endif
                </td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->kompetensi_keahlian }}</td>
                <td>{{ $item->tahun_lulus }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->no_telp }}</td>
                <td>{{ $item->email }}</td>

                <td>{{ $item->nama_tempat_bekerja }}</td>
                <td>{{ $item->alamat_tempat_bekerja }}</td>
                <td>{{ $item->sektor_tempat_bekerja }}</td>
                <td>{{ $item->posisi_tempat_bekerja }}</td>
                <td>{{ $item->no_telp_tempat_bekerja }}</td>
                <td>{{ $item->tahun_masuk }}</td>

                <td>{{ $item->nama_perguruan_tinggi }}</td>
                <td>{{ $item->fakultas }}</td>
                <td>{{ $item->program_studi }}</td>
                <td>{{ $item->jenjang_pendidikan }}</td>

                <td>{{ $item->nama_usaha }}</td>
                <td>{{ $item->alamat_usaha }}</td>
                <td>{{ $item->bidang_usaha }}</td>
                <td>{{ $item->jumlah_karyawan }}</td>
                <td>{{ $item->no_telp_tempat_usaha }}</td>
                <td>
                    @if ($item->kegiatan == 1)
                        Mencari Pekerjaan
                    @elseif($item->kegiatan == 2)
                        Mencari Pekerjaan
                    @else
                        Lainya
                    @endif
                </td>
                <td>{{ $item->lainya }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
