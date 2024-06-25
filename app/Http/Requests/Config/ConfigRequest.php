<?php

namespace App\Http\Requests\Config;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
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
            "app_name" => 'required',
            "foto" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "cap_sekolah" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "ttd_kepsek" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "logo" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "link_erapor" => 'required',
            "nip" => 'required',
            "link_erapor" => 'required',
            "link_soal" => 'required',
            "link_akademik" => 'required',
            "link_elearning" => 'required',
            "foto_kepsek" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "nama_kepsek" => 'required',
            "sambutan_kepsek" => 'required',
            "visi" => 'required',
            "misi" => 'required',
            "foto_jurusan_1" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "name_jurusan_1" => 'required',
            "foto_jurusan_2" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "name_jurusan_2" => 'required',
            "foto_jurusan_3" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "name_jurusan_3" => 'required',
            "foto_jurusan_4" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "name_jurusan_4" => 'required',
            "foto_waka_humas" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "name_humas" => 'required',
            "foto_waka_kesiswaan" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "name_kesiswaan" => 'required',
            "foto_waka_kurikulum" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "name_kurikulum" => 'required',
            "foto_waka_sapras" => 'nullable|image|file|mimes:png,jpg,jpeg',
            "name_sapras" => 'required',
            "alamat" => 'required',
            "email" => 'required',
            "no_telp" => 'required',
            "fb" => 'required',
            "ig" => 'required',

        ];
    }
}
