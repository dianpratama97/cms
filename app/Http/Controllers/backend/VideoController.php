<?php

namespace App\Http\Controllers\backend;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.video.index',[
            'data' => Video::paginate(10)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        Video::create([
            'name'     => $request->name,
            'link'      => $request->link,
        ]);
        Alert::success('Berhasil', 'Data di Tambah.');
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        Video::find($id)->delete();
        Alert::success('Berhasil', 'Data di Hapus.');
        return redirect()->back();
    }
}
