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
        Schema::create('t_disabilitas', function (Blueprint $table) {
            $table->increments('id_disabilitas');
            $table->BigInteger('nik'); // Foreign key to t_penduduk
            $table->enum('kategori', ['Fisik', 'Ganda', 'Mental', 'Sensorik']); // Disabilitas categories
            $table->string('dusun', 50);
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('nik')->references('nik')->on('t_penduduk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_disabilitas', function (Blueprint $table) {
            $table->dropForeign(['nik']); // Drop foreign key constraint
        });

        Schema::dropIfExists('t_disabilitas');
    }
};
