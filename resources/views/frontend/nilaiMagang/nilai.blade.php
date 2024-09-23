<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN 1 SINGKEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card mt-5 mb-3"
            style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <form action="{{ route('nilai.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h3 class="text-center">HALAMAN NILAI PKL KELAS 12 SMKN 1 SINGKEP</h3>
                </div>
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

                <div class="card-footer">
                    <a href="{{ route('welcome') }}" class="btn"
                        style="background-color: rgb(22, 157, 190); color: rgb(255, 255, 255)">Home</a>
                    <button type="submit" class="btn"
                        style="background-color: rgb(20, 180, 20); color: rgb(255, 255, 255)">Kirim</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
