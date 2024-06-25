<?php

namespace App\Http\Controllers\backend;

use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PesanController extends Controller
{
    public function inbox(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email'],
            'subject' => 'required|max:20',
            'pesan' => 'required|max:50',
        ]);
        Pesan::create([
            'name'     => $request->name,
            'email'      => $request->email,
            'subject'      => $request->subject,
            'pesan'      => $request->pesan,
        ]);

        return redirect()->back()->with('message', 'Pesan Kamu berhasil di kirim.');
    }

    public function index()
    {
        return view('backend.pesan.index', [
            'data' => Pesan::get()
        ]);
    }

    public function update(Request $request, $id)
    {
        $data['status'] = $request->status;
        Pesan::find($id)->update($data);
        Alert::success('Berhasil', 'Pesan di Baca.');
        return redirect()->back();
    }

    public function hapus($id)
    {
        Pesan::find($id)->delete();
        Alert::success('Berhasil', 'Pesan di Hapus.');
        return redirect()->back();
    }
}
