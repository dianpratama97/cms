<?php

namespace App\Http\Requests\Alumni;

use Illuminate\Foundation\Http\FormRequest;

class AlumniKuliahRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_lengkap' => 'required',
            'nis' => 'required',
            'kompetensi_keahlian' => 'required',
            'tahun_lulus' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',

            'nama_perguruan_tinggi' => 'required',
            'fakultas' => 'required',
            'program_studi' => 'required',
            'jenjang_pendidikan' => 'required',
            'tahun_masuk' => 'required',
        ];
    }
}
