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
        Schema::create('jadwal_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->char('Kode_matakuliah', 8);
            $table->char('Kode_term', 8);
            $table->char('Kode_dosen', 8);
            $table->char('day', 6);
            $table->time('Jam_mulai', $precision=0);
            $table->time('Jam_selesai', $precision=0);
            $table->char('ruangan', 5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliahs');
    }
};
