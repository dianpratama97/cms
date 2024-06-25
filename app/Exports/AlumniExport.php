<?php

namespace App\Exports;

use App\Models\Alumni;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AlumniExport implements FromView
{
    public function view(): View
    {
        return view('backend.alumni.viewExcel', [
            'alumni' => Alumni::all()
        ]);
    }
}
