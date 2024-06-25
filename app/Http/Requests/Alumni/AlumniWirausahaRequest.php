<?php

namespace App\Http\Requests\Alumni;

use Illuminate\Foundation\Http\FormRequest;

class AlumniWirausahaRequest extends FormRequest
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
            'status_alumni' => 'required',
            'nis' => 'required',
            'kompetensi_keahlian' => 'required',
            'tahun_lulus' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'nama_usaha' => 'required',
            'alamat_usaha' => 'required',
            'bidang_usaha' => 'required',
            'jumlah_karyawan' => 'required',
            'no_telp_tempat_usaha' => 'required',
            'tahun_masuk' => 'required',
        ];
    }
}
