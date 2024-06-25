<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            "app_name" => "-",
            "foto" => "-",
            "logo" => "-",
            "link_erapor" => "-",
            "link_soal" => "-",
            "link_akademik" => "-",
            "link_elearning" => "-",
            "sambutan_kepsek" => "-",
            "nama_kepsek" => "-",
            "foto_kepsek" => "-",
            "cap_sekolah" => "-",
            "nip" => "-",
            "ttd_kepsek" => "-",
            "foto_jurusan_1" => "-",
            "name_jurusan_1" => "-",
            "foto_jurusan_2" => "-",
            "name_jurusan_2" => "-",
            "name_jurusan_3" => "-",
            "foto_jurusan_3" => "-",
            "name_jurusan_4" => "-",
            "foto_jurusan_4" => "-",
            "visi" => "-",
            "misi" => "-",
            "foto_waka_humas" => "-",
            "name_humas" => "-",
            "foto_waka_kesiswaan" => "-",
            "name_kesiswaan" => "-",
            "foto_waka_kurikulum" => "-",
            "name_kurikulum" => "-",
            "foto_waka_sapras" => "-",
            "name_sapras" => "-",
            "alamat" => "-",
            "email" => "-",
            "no_telp" => "-",
            "fb" => "-",
            "ig" => "-"
        ]);

        DB::table('configs')->insert(
            $data
        );
    }
}
