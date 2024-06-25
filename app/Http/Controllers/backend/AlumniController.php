<?php

namespace App\Http\Controllers\backend;

use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Exports\AlumniExport;
use Barryvdh\DomPDF\Facade\Pdf;
use App\DataTables\AlumniDataTable;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class AlumniController extends Controller
{

    public function index(AlumniDataTable $dataTable)
    {
        return $dataTable->render('backend.alumni.index');
    }

    public function export()
    {
        return Excel::download(new AlumniExport, 'alumni.xlsx');
    }

    public function hapusSemua(Request $request)
    {
        $data = Alumni::findOrFail($request->id);
        foreach ($data as $value) {
            Alumni::destroy($value->id);
        }
        Alert::success('Berhasil', 'Data di Hapus.');
        return redirect()->back();
    }
}
