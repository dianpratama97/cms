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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('status_alumni');
            $table->string('nama_lengkap')->nullable();
            $table->string('nis')->nullable();
            $table->string('kompetensi_keahlian')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();

            $table->string('nama_tempat_bekerja')->default('-');
            $table->string('alamat_tempat_bekerja')->default('-');
            $table->string('sektor_tempat_bekerja')->default('-');
            $table->string('posisi_tempat_bekerja')->default('-');
            $table->string('no_telp_tempat_bekerja')->default('-');
            $table->string('tahun_masuk')->default('-');

            $table->string('nama_perguruan_tinggi')->default('-');
            $table->string('fakultas')->default('-');
            $table->string('program_studi')->default('-');
            $table->string('jenjang_pendidikan')->default('-');

            $table->string('nama_usaha')->default('-');
            $table->string('alamat_usaha')->default('-');
            $table->string('bidang_usaha')->default('-');
            $table->string('jumlah_karyawan')->default('-');
            $table->string('no_telp_tempat_usaha')->default('-');

            $table->string('kegiatan')->default('-');
            $table->string('lainya')->default('-');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
