<?php

namespace App\Http\Requests\Alumni;

use Illuminate\Foundation\Http\FormRequest;

class AlumniBekerjaRequest extends FormRequest
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
            'nama_tempat_bekerja' => 'required',
            'alamat_tempat_bekerja' => 'required',
            'sektor_tempat_bekerja' => 'required',
            'posisi_tempat_bekerja' => 'required',
            'no_telp_tempat_bekerja' => 'required',
            'tahun_masuk' => 'required',
        ];
    }
}
