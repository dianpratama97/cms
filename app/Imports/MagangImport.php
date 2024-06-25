<?php

namespace App\Imports;

use App\Models\NilaiMagang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MagangImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NilaiMagang([
            'name'  => $row['name'],
            'nisn'  => $row['nisn'],
            'jurusan'  => $row['jurusan'],
            'status'  => $row['status'],
        ]);
    }
}
