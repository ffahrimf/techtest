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
        Schema::create('t_penduduk', function (Blueprint $table) {
            $table->bigInteger('nik')->primary();
            $table->bigInteger('no_kk');
            $table->string('nama', 50);
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 20);
            $table->string('alamat', 100);
            $table->string('rt', 5);
            $table->string('rw', 50);
            $table->string('dusun', 50);
            $table->string('agama', 20);
            $table->string('status_perkawinan', 20);
            $table->string('pendidikan', 50);
            $table->string('pekerjaan', 40);
            $table->string('golongan_darah', 20);
            $table->string('shdk', 20);
            $table->string('ayah', 50);
            $table->string('ibu', 50);
            $table->string('kepala_keluarga', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penduduk');
    }
};
