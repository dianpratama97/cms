<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('foto');
            $table->string('logo');
            $table->string('link_erapor');
            $table->string('link_soal');
            $table->string('link_akademik');
            $table->string('link_elearning');
            $table->text('sambutan_kepsek');
            $table->string('nama_kepsek');
            $table->string('nip');
            $table->string('ttd_kepsek');
            $table->string('cap_sekolah');
            $table->string('foto_kepsek');
            $table->string('foto_jurusan_1');
            $table->string('name_jurusan_1');
            $table->string('foto_jurusan_2');
            $table->string('name_jurusan_2');
            $table->string('name_jurusan_3');
            $table->string('foto_jurusan_3');
            $table->string('name_jurusan_4');
            $table->string('foto_jurusan_4');
            $table->text('visi');
            $table->text('misi');
            $table->string('foto_waka_humas');
            $table->string('name_humas');
            $table->string('foto_waka_kesiswaan');
            $table->string('name_kesiswaan');
            $table->string('foto_waka_kurikulum');
            $table->string('name_kurikulum');
            $table->string('foto_waka_sapras');
            $table->string('name_sapras');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_telp');
            $table->string('fb');
            $table->string('ig');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
