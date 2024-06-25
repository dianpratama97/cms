<?php

namespace App\Http\Controllers\frontend;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Alumni\AlumniBekerjaRequest;
use App\Http\Requests\Alumni\AlumniBelumBekerjaRequest;
use App\Http\Requests\Alumni\AlumniKuliahRequest;
use App\Http\Requests\Alumni\AlumniWirausahaRequest;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function index()
    {
        return view('frontend.alumni.index', [
            'config' => Config::first(),
        ]);
    }

    public function storeBekerja(AlumniBekerjaRequest $request)
    {
        Alumni::create($request->all());
        return redirect()->back()->with('message', 'Data di Tambah.');
    }

    public function storeKuliah(AlumniKuliahRequest $request)
    {
        Alumni::create($request->all());
        return redirect()->back()->with('message', 'Data di Tambah.');
    }

    public function storeWirausaha(AlumniWirausahaRequest $request)
    {
        Alumni::create($request->all());
        return redirect()->back()->with('message', 'Data di Tambah.');
    }

    public function storeBelumBekerjaKuliah(AlumniBelumBekerjaRequest $request)
    {
        Alumni::create($request->all());
        return redirect()->back()->with('message', 'Data di Tambah.');
    }
}
