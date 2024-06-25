<?php

namespace App\Http\Controllers\backend;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.gallery.index', [
            'data' => Gallery::paginate(10)
        ]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'upload' => 'required|max:10240',
        ]);
        foreach ($request->upload as $file) {

            $filename = time() . '_' . $file->getClientOriginalName();
            $filesize = $file->getSize();
            $file->storeAs('public/gambar/backend/gallery/', $filename);
            $fileModel = new Gallery;
            $fileModel->upload = $filename;
            $fileModel->save();
        }
        Alert::success('Berhasil', 'Data di Tambah.');
        return redirect()->route('gallery.index');
    }

    public function destroy(string $id)
    {
        $data = Gallery::find($id);
        Storage::delete('public/gambar/backend/gallery/' . $data->upload);
        $data->delete();
        Alert::success('Berhasil', 'Data di Tambah.');
        return redirect()->route('gallery.index');
    }
}
