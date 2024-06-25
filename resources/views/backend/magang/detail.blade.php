<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table table-bordered">
            <tr>
                <td width="30%">Nama Siswa</td>
                <td>{{ $data->name }}</td>
            </tr>
            <tr>
                <td width="30%">NISN</td>
                <td>{{ $data->nisn }}</td>
            </tr>
            <tr>
                <td width="30%">Jurusan</td>
                <td>{{ $data->jurusan }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <img src="{{ asset('storage/gambar/nilai_magang/' . $data->file) }}" width="25%">
                </td>
            </tr>
        </table>
    </div>
</div>
