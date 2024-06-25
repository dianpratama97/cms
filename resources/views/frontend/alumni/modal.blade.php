 <!-- Modal 1-->
 <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header bg-info ">
                 <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Sedang Bekerja</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="{{ route('alumni.bekerja') }}" method="post">
                 @csrf
                 <input type="hidden" value="bekerja" name="status_alumni">
                 <div class="modal-body">
                     <div class="mb-3">
                         <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                         <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                             id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                     </div>
                     <div class="mb-3">
                         <label for="nis" class="form-label">NIS</label>
                         <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis"
                             name="nis" value="{{ old('nis') }}">
                     </div>
                     <div class="mb-3">
                         <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                         <select name="kompetensi_keahlian" id="kompetensi_keahlian"
                             class="form-select @error('kompetensi_keahlian') is-invalid @enderror">
                             <option value="">--pilih--</option>
                             <option value="TBSM">Teknik dan Bisnis Sepeda Motor</option>
                             <option value="TKJ">Teknik Komputer dan Jaringan</option>
                             <option value="MM">Multimedia</option>
                             <option value="PKM">Perbankan dan Keuangan Mikro</option>
                             <option value="DKV">Desain Komunikasi Visual</option>
                             <option value="LP">Layanan Perbankan</option>
                             <option value="TSM">Teknik Sepeda Motor</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                         <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror"
                             id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus') }}">
                     </div>
                     <div class="mb-3">
                         <label for="alamat" class="form-label">Alamat</label>
                         <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                             name="alamat" value="{{ old('alamat') }}">
                     </div>
                     <div class="mb-3">
                         <label for="no_telp" class="form-label">Nomor HP/Telepon</label>
                         <input type="number" class="form-control @error('no_telp') is-invalid @enderror"
                             id="no_telp" name="no_telp" value="{{ old('no_telp') }}">
                     </div>
                     <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                         <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                             name="email" value="{{ old('email') }}">
                     </div>
                     {{-- pertanyaan --}}

                     <div class="mb-3">
                         <label for="nama_tempat_bekerja"
                             class="form-label @error('nama_tempat_bekerja') is-invalid @enderror">Nama
                             Perusahaan/Industri/Lembaga/Dinas/Toko.
                             (tempat kita bekerja)</label>
                         <input type="text" class="form-control @error('nama_tempat_bekerja') is-invalid @enderror"
                             id="nama_tempat_bekerja" name="nama_tempat_bekerja"
                             value="{{ old('nama_tempat_bekerja') }}">
                     </div>

                     <div class="mb-3">
                         <label for="alamat_tempat_bekerja"
                             class="form-label @error('alamat_tempat_bekerja') is-invalid @enderror">Alamat
                             Perusahaan/Industri/Lembaga/Dinas/Toko</label>
                         <input type="text"
                             class="form-control @error('alamat_tempat_bekerja') is-invalid @enderror"
                             id="alamat_tempat_bekerja" name="alamat_tempat_bekerja"
                             value="{{ old('alamat_tempat_bekerja') }}">
                     </div>

                     <div class="mb-3">
                         <label for="sektor_tempat_bekerja"
                             class="form-label @error('sektor_tempat_bekerja') is-invalid @enderror">Sektor
                             Perusahaan/Industri/Lembaga/Dinas/Toko.
                             <b>(contoh: jasa,keuangan,pertanian,manufactur,retail,dsb)</b></label>
                         <input type="text"
                             class="form-control @error('sektor_tempat_bekerja') is-invalid @enderror"
                             id="sektor_tempat_bekerja" name="sektor_tempat_bekerja"
                             value="{{ old('sektor_tempat_bekerja') }}">
                     </div>

                     <div class="mb-3">
                         <label for="posisi_tempat_bekerja"
                             class="form-label @error('posisi_tempat_bekerja') is-invalid @enderror">Posisi
                             Perusahaan/Industri/Lembaga/Dinas/Toko.
                             <b>(contoh: staff,teknisi,front office,driver,mekanik,karyawan,dsb)</b></label>
                         <input type="text"
                             class="form-control @error('posisi_tempat_bekerja') is-invalid @enderror"
                             id="posisi_tempat_bekerja" name="posisi_tempat_bekerja"
                             value="{{ old('posisi_tempat_bekerja') }}">
                     </div>

                     <div class="mb-3">
                         <label for="no_telp_tempat_bekerja"
                             class="form-label @error('no_telp_tempat_bekerja') is-invalid @enderror">No Telp.
                             Perusahaan/Industri/Lembaga/Dinas/Toko.</label>
                         <input type="number"
                             class="form-control @error('no_telp_tempat_bekerja') is-invalid @enderror"
                             id="no_telp_tempat_bekerja" name="no_telp_tempat_bekerja"
                             value="{{ old('no_telp_tempat_bekerja') }}">
                     </div>

                     <div class="mb-3">
                         <label for="tahun_masuk" class="form-label @error('tahun_masuk') is-invalid @enderror">Bulan
                             dan Tahun Masuk Kerja</label>
                         <input type="text" class="form-control @error('tahun_masuk') is-invalid @enderror"
                             id="tahun_masuk" name="tahun_masuk" value="{{ old('tahun_masuk') }}">
                         <small class="text-danger"><b><i>Agustus 2023</i></b></small>
                     </div>

                 </div>


                 <div class="modal-footer ">
                     <button type="button" style="color: white" class="btn btn-warning"
                         data-bs-dismiss="modal">Batal</button>
                     <button type="submit" style="color: white" class="btn btn-info">Simpan</button>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <!-- Modal 2-->
 <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Sedang Kuliah / Bekerja Sambil Kuliah</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="{{ route('alumni.kuliah') }}" method="post">
                 @csrf
                 <input type="hidden" value="kuliah" name="status_alumni">
                 <div class="modal-body">
                     <div class="mb-3">
                         <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                         <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                             id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                     </div>
                     <div class="mb-3">
                         <label for="nis" class="form-label">NIS</label>
                         <input type="text" class="form-control @error('nis') is-invalid @enderror"
                             id="nis" name="nis" value="{{ old('nis') }}">
                     </div>
                     <div class="mb-3">
                         <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                         <select name="kompetensi_keahlian" id="kompetensi_keahlian"
                             class="form-select @error('kompetensi_keahlian') is-invalid @enderror">
                             <option value="">--pilih--</option>
                             <option value="TBSM">Teknik dan Bisnis Sepeda Motor</option>
                             <option value="TKJ">Teknik Komputer dan Jaringan</option>
                             <option value="MM">Multimedia</option>
                             <option value="PKM">Perbankan dan Keuangan Mikro</option>
                             <option value="DKV">Desain Komunikasi Visual</option>
                             <option value="LP">Layanan Perbankan</option>
                             <option value="TSM">Teknik Sepeda Motor</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                         <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror"
                             id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus') }}">
                     </div>
                     <div class="mb-3">
                         <label for="alamat" class="form-label">Alamat</label>
                         <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                             id="alamat" name="alamat" value="{{ old('alamat') }}">
                     </div>
                     <div class="mb-3">
                         <label for="no_telp" class="form-label">Nomor HP/Telepon</label>
                         <input type="number" class="form-control @error('no_telp') is-invalid @enderror"
                             id="no_telp" name="no_telp" value="{{ old('no_telp') }}">
                     </div>
                     <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                         <input type="email" class="form-control @error('email') is-invalid @enderror"
                             id="email" name="email" value="{{ old('email') }}">
                     </div>
                     {{-- pertanyaan --}}

                     <div class="mb-3">
                         <label for="nama_perguruan_tinggi"
                             class="form-label @error('nama_perguruan_tinggi') is-invalid @enderror">Nama
                             Perguruan Tinggi</label>
                         <input type="text"
                             class="form-control @error('nama_perguruan_tinggi') is-invalid @enderror"
                             id="nama_perguruan_tinggi" name="nama_perguruan_tinggi"
                             value="{{ old('nama_perguruan_tinggi') }}">
                     </div>

                     <div class="mb-3">
                         <label for="fakultas"
                             class="form-label @error('fakultas') is-invalid @enderror">Fakultas</label>
                         <input type="text" class="form-control @error('fakultas') is-invalid @enderror"
                             id="fakultas" name="fakultas" value="{{ old('fakultas') }}">
                     </div>

                     <div class="mb-3">
                         <label for="program_studi"
                             class="form-label @error('program_studi') is-invalid @enderror">Jurusan/Program
                             Studi</label>
                         <input type="text" class="form-control @error('program_studi') is-invalid @enderror"
                             id="program_studi" name="program_studi" value="{{ old('program_studi') }}">
                     </div>

                     <div class="mb-3">
                         <label for="jenjang_pendidikan" class="form-label">Jenjang Pendidikan</label>
                         <select name="jenjang_pendidikan" id="jenjang_pendidikan"
                             class="form-select @error('jenjang_pendidikan') is-invalid @enderror">
                             <option value="">--pilih--</option>
                             <option value="D1">DI</option>
                             <option value="D2">D2</option>
                             <option value="D3">D3</option>
                             <option value="D4">D4</option>
                             <option value="S1">S1</option>
                             <option value="S2">S2</option>
                             <option value="S3">S3</option>
                         </select>
                     </div>

                     <div class="mb-3">
                         <label for="tahun_masuk" class="form-label @error('tahun_masuk') is-invalid @enderror">Bulan
                             dan Tahun Masuk Kuliah</label>
                         <input type="text" class="form-control @error('tahun_masuk') is-invalid @enderror"
                             id="tahun_masuk" name="tahun_masuk" value="{{ old('tahun_masuk') }}">
                         <small class="text-danger"><b><i>Agustus 2023</i></b></small>
                     </div>

                 </div>


                 <div class="modal-footer ">
                     <button type="button" style="color: white" class="btn btn-warning"
                         data-bs-dismiss="modal">Batal</button>
                     <button type="submit" style="color: white" class="btn btn-info">Simpan</button>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <!-- Modal 3-->
 <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Sedang Wirausaha</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="{{ route('alumni.wirausaha') }}" method="post">
                 @csrf
                 <input type="hidden" value="wirausaha" name="status_alumni">
                 <div class="modal-body">
                     <div class="mb-3">
                         <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                         <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                             id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                     </div>
                     <div class="mb-3">
                         <label for="nis" class="form-label">NIS</label>
                         <input type="text" class="form-control @error('nis') is-invalid @enderror"
                             id="nis" name="nis" value="{{ old('nis') }}">
                     </div>
                     <div class="mb-3">
                         <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                         <select name="kompetensi_keahlian" id="kompetensi_keahlian"
                             class="form-select @error('kompetensi_keahlian') is-invalid @enderror">
                             <option value="">--pilih--</option>
                             <option value="TBSM">Teknik dan Bisnis Sepeda Motor</option>
                             <option value="TKJ">Teknik Komputer dan Jaringan</option>
                             <option value="MM">Multimedia</option>
                             <option value="PKM">Perbankan dan Keuangan Mikro</option>
                             <option value="DKV">Desain Komunikasi Visual</option>
                             <option value="LP">Layanan Perbankan</option>
                             <option value="TSM">Teknik Sepeda Motor</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                         <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror"
                             id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus') }}">
                     </div>
                     <div class="mb-3">
                         <label for="alamat" class="form-label">Alamat</label>
                         <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                             id="alamat" name="alamat" value="{{ old('alamat') }}">
                     </div>
                     <div class="mb-3">
                         <label for="no_telp" class="form-label">Nomor HP/Telepon</label>
                         <input type="number" class="form-control @error('no_telp') is-invalid @enderror"
                             id="no_telp" name="no_telp" value="{{ old('no_telp') }}">
                     </div>
                     <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                         <input type="email" class="form-control @error('email') is-invalid @enderror"
                             id="email" name="email" value="{{ old('email') }}">
                     </div>
                     {{-- pertanyaan --}}

                     <div class="mb-3">
                         <label for="nama_usaha" class="form-label @error('nama_usaha') is-invalid @enderror">Nama
                             Usaha</label>
                         <input type="text" class="form-control @error('nama_usaha') is-invalid @enderror"
                             id="nama_usaha" name="nama_usaha" value="{{ old('nama_usaha') }}">
                     </div>

                     <div class="mb-3">
                         <label for="alamat_usaha"
                             class="form-label @error('alamat_usaha') is-invalid @enderror">Alamat Usaha</label>
                         <input type="text" class="form-control @error('alamat_usaha') is-invalid @enderror"
                             id="alamat_usaha" name="alamat_usaha" value="{{ old('alamat_usaha') }}">
                     </div>

                     <div class="mb-3">
                         <label for="bidang_usaha"
                             class="form-label @error('bidang_usaha') is-invalid @enderror">Bidang Usaha <b>(Contoh:
                                 Perdagangan, Jasa, Maintenance, Kontraktor, dsb.)</b></label>
                         <input type="text" class="form-control @error('bidang_usaha') is-invalid @enderror"
                             id="bidang_usaha" name="bidang_usaha" value="{{ old('bidang_usaha') }}">
                     </div>

                     <div class="mb-3">
                         <label for="jumlah_karyawan"
                             class="form-label @error('jumlah_karyawan') is-invalid @enderror">Jumlah Karyawan</label>
                         <input type="text" class="form-control @error('jumlah_karyawan') is-invalid @enderror"
                             id="jumlah_karyawan" name="jumlah_karyawan" value="{{ old('jumlah_karyawan') }}">
                     </div>

                     <div class="mb-3">
                         <label for="no_telp_tempat_usaha"
                             class="form-label @error('no_telp_tempat_usaha') is-invalid @enderror">Nomor Telepon
                             Tempat Usaha</label>
                         <input type="number"
                             class="form-control @error('no_telp_tempat_usaha') is-invalid @enderror"
                             id="no_telp_tempat_usaha" name="no_telp_tempat_usaha"
                             value="{{ old('no_telp_tempat_usaha') }}">
                     </div>

                     <div class="mb-3">
                         <label for="tahun_masuk" class="form-label @error('tahun_masuk') is-invalid @enderror">Bulan
                             dan Tahun Membuka Usaha</label>
                         <input type="text" class="form-control @error('tahun_masuk') is-invalid @enderror"
                             id="tahun_masuk" name="tahun_masuk" value="{{ old('tahun_masuk') }}">
                         <small class="text-danger"><b><i>Agustus 2023</i></b></small>
                     </div>
                 </div>


                 <div class="modal-footer ">
                     <button type="button" style="color: white" class="btn btn-warning"
                         data-bs-dismiss="modal">Batal</button>
                     <button type="submit" style="color: white" class="btn btn-info">Simpan</button>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <!-- Modal 4-->
 <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Belum Bekerja/Kuliah</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="{{ route('alumni.belumBekerjaKuliah') }}" method="post">
                 @csrf
                 <input type="hidden" value="belum_bekerja_kuliah" name="status_alumni">
                 <div class="modal-body">
                     <div class="mb-3">
                         <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                         <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                             id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                     </div>
                     <div class="mb-3">
                         <label for="nis" class="form-label">NIS</label>
                         <input type="text" class="form-control @error('nis') is-invalid @enderror"
                             id="nis" name="nis" value="{{ old('nis') }}">
                     </div>
                     <div class="mb-3">
                         <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                         <select name="kompetensi_keahlian" id="kompetensi_keahlian"
                             class="form-select @error('kompetensi_keahlian') is-invalid @enderror">
                             <option value="">--pilih--</option>
                             <option value="TBSM">Teknik dan Bisnis Sepeda Motor</option>
                             <option value="TKJ">Teknik Komputer dan Jaringan</option>
                             <option value="MM">Multimedia</option>
                             <option value="PKM">Perbankan dan Keuangan Mikro</option>
                             <option value="DKV">Desain Komunikasi Visual</option>
                             <option value="LP">Layanan Perbankan</option>
                             <option value="TSM">Teknik Sepeda Motor</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                         <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror"
                             id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus') }}">
                     </div>
                     <div class="mb-3">
                         <label for="alamat" class="form-label">Alamat</label>
                         <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                             id="alamat" name="alamat" value="{{ old('alamat') }}">
                     </div>
                     <div class="mb-3">
                         <label for="no_telp" class="form-label">Nomor HP/Telepon</label>
                         <input type="number" class="form-control @error('no_telp') is-invalid @enderror"
                             id="no_telp" name="no_telp" value="{{ old('no_telp') }}">
                     </div>
                     <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                         <input type="email" class="form-control @error('email') is-invalid @enderror"
                             id="email" name="email" value="{{ old('email') }}">
                     </div>
                     {{-- pertanyaan --}}

                     <div class="mb-3">
                         <label for="kegiatan" class="form-label">Kegiatan Yang Anda Lakukan Sekarang</label>
                         <select name="kegiatan" id="kegiatan"
                             class="form-select @error('kegiatan') is-invalid @enderror">
                             <option value="">--pilih--</option>
                             <option value="1">Mencari Pekerjaan</option>
                             <option value="2">Mencari Perguruan Tinggi</option>
                             <option value="3">Lainya</option>
                         </select>
                     </div>

                     <div class="mb-3">
                         <label for="lainya" class="form-label @error('lainya') is-invalid @enderror">Yang
                             Lainya</label>
                         <input type="text" class="form-control @error('lainya') is-invalid @enderror"
                             id="lainya" name="lainya" value="{{ old('lainya') }}">
                         <small class="text-danger"><b><i>Jika Tidak Memilih Lainya Silakan Isi Dengan Tanda
                                     -</i></b></small>
                     </div>
                 </div>


                 <div class="modal-footer ">
                     <button type="button" style="color: white" class="btn btn-warning"
                         data-bs-dismiss="modal">Batal</button>
                     <button type="submit" style="color: white" class="btn btn-info">Simpan</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
