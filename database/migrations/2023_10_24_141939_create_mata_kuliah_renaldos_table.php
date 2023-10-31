<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMataKuliahRenaldosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliah_renaldos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('kode_mataKuliah')->nullable();
            $table->string('nama_mataKuliah')->nullable();
            $table->integer('sks')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mata_kuliah_renaldos');
    }
}
