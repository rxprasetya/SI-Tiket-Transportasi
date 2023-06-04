<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketPesawatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket_pesawats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_maskapai')->unsigned();
            $table->bigInteger('id_jadwal')->unsigned();
            $table->integer('harga_tiket_pesawat');
            $table->bigInteger('id_kota_asal')->unsigned();
            $table->bigInteger('id_kota_tujuan')->unsigned();
            $table->foreign('id_maskapai')->references('id')->on('maskapais');
            $table->foreign('id_jadwal')->references('id')->on('jadwals');
            $table->foreign('id_kota_asal')->references('id')->on('kotas');
            $table->foreign('id_kota_tujuan')->references('id')->on('kotas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiket_pesawats');
    }
}
