<?php

namespace App\Http\Controllers\Backend;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Config\ConfigRequest;

class ConfigController extends Controller
{
    public function index()
    {
        return view('backend.config.index', [
            'data' => Config::get(),
            'id' => Config::first()
        ]);
    }

    public function edit(string $id)
    {
        return view('backend.config.edit', [
            'config' => Config::find($id)
        ]);
    }

    public function update(ConfigRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_foto);
            $data['foto'] = $fileName;
        } else {
            $data['foto'] = $request->old_foto;
        }

        if ($request->hasFile('logo')) {
            $file = $request->file('logo'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_logo);
            $data['logo'] = $fileName;
        } else {
            $data['logo'] = $request->old_logo;
        }

        if ($request->hasFile('cap_sekolah')) {
            $file = $request->file('cap_sekolah'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_cap_sekolah);
            $data['cap_sekolah'] = $fileName;
        } else {
            $data['cap_sekolah'] = $request->old_cap_sekolah;
        }

        if ($request->hasFile('ttd_kepsek')) {
            $file = $request->file('ttd_kepsek'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_ttd_kepsek);
            $data['ttd_kepsek'] = $fileName;
        } else {
            $data['ttd_kepsek'] = $request->old_ttd_kepsek;
        }

        if ($request->hasFile('foto_jurusan_1')) {
            $file = $request->file('foto_jurusan_1'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_foto_jurusan_1);
            $data['foto_jurusan_1'] = $fileName;
        } else {
            $data['foto_jurusan_1'] = $request->old_foto_jurusan_1;
        }

        if ($request->hasFile('foto_jurusan_2')) {
            $file = $request->file('foto_jurusan_2'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_foto_jurusan_2);
            $data['foto_jurusan_2'] = $fileName;
        } else {
            $data['foto_jurusan_2'] = $request->old_foto_jurusan_2;
        }

        if ($request->hasFile('foto_jurusan_3')) {
            $file = $request->file('foto_jurusan_3'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_foto_jurusan_3);
            $data['foto_jurusan_3'] = $fileName;
        } else {
            $data['foto_jurusan_3'] = $request->old_foto_jurusan_3;
        }

        if ($request->hasFile('foto_jurusan_4')) {
            $file = $request->file('foto_jurusan_4'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_foto_jurusan_4);
            $data['foto_jurusan_4'] = $fileName;
        } else {
            $data['foto_jurusan_4'] = $request->old_foto_jurusan_4;
        }

        if ($request->hasFile('foto_kepsek')) {
            $file = $request->file('foto_kepsek'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_foto_kepsek);
            $data['foto_kepsek'] = $fileName;
        } else {
            $data['foto_kepsek'] = $request->old_foto_kepsek;
        }

        if ($request->hasFile('foto_waka_humas')) {
            $file = $request->file('foto_waka_humas'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_foto_waka_humas);
            $data['foto_waka_humas'] = $fileName;
        } else {
            $data['foto_waka_humas'] = $request->old_foto_waka_humas;
        }

        if ($request->hasFile('foto_waka_kesiswaan')) {
            $file = $request->file('foto_waka_kesiswaan'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_foto_waka_kesiswaan);
            $data['foto_waka_kesiswaan'] = $fileName;
        } else {
            $data['foto_waka_kesiswaan'] = $request->old_foto_waka_kesiswaan;
        }

        if ($request->hasFile('foto_waka_kurikulum')) {
            $file = $request->file('foto_waka_kurikulum'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_foto_waka_kurikulum);
            $data['foto_waka_kurikulum'] = $fileName;
        } else {
            $data['foto_waka_kurikulum'] = $request->old_foto_waka_kurikulum;
        }

        if ($request->hasFile('foto_waka_sapras')) {
            $file = $request->file('foto_waka_sapras'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/config', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/config/' . $request->old_foto_waka_sapras);
            $data['foto_waka_sapras'] = $fileName;
        } else {
            $data['foto_waka_sapras'] = $request->old_foto_waka_sapras;
        }

        Config::find($id)->update($data);
        Alert::success('Berhasil', 'Data di Tambah.');
        return redirect()->route('config.index');
    }
}
