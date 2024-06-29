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
        Schema::create('t_mobil', function (Blueprint $table) {
            $table->increments('id_mobil');
            $table->string('name', 100);
            $table->string('category', 50);
            $table->string('color', 100);
            $table->string('stock', 5);
            $table->string('price', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_mobil');
    }
};
