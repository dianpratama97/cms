<?php

namespace App\Http\Controllers\backend;

use App\DataTables\MagangDataTable;
use App\Models\NilaiMagang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\MagangImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class NilaiMagangController extends Controller
{
    public function index()
    {
        return view('frontend.nilaiMagang.nilai');
    }
    public function store(Request $request,)
    {
        $request->validate([
            'name' => 'required',
            'jurusan' => 'required',
            'nisn' => 'required',
            "image" => 'required|image|file|mimes:png,jpg,jpeg',
        ]);

        $file = $request->file('image'); //ambil file
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi

        $file->storeAs('public/gambar/nilai_magang', $fileName); //lokasi file

        $magang = NilaiMagang::where('nisn', $request->nisn)->where('jurusan', $request->jurusan)->first();
        if (!$magang) {
            Alert::error('Opps.', 'NISN Yang Anda Masukan Tidak Sesuai Dengan Siswa Ini.');
            return redirect()->back();
        } else {
            $data['file'] = $fileName;
            $data['status'] = 1;

            NilaiMagang::where('nisn', $request->nisn)->update($data);
            Alert::success('Berhasil.', 'Nilai Siswa Berhasil Dikirim.');
            return redirect()->back();
        }
    }

    public function list(MagangDataTable $dataTable)
    {
        return $dataTable->render('backend.magang.index');
    }

    public function import()
    {
        Excel::import(new MagangImport, request()->file('excel'));
        Alert::success('Berhasil.', 'Data Berhasil Di Import.');
        return redirect()->route('magang.list');
    }

    public function detail($id)
    {
        $data = NilaiMagang::find($id);
        return view('backend.magang.detail', compact('data'));
    }
}
