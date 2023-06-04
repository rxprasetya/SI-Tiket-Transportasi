<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketKapalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket_kapals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_kapal')->unsigned();
            $table->bigInteger('id_jadwal')->unsigned();
            $table->integer('harga_tiket_kapal');
            $table->bigInteger('id_kota_asal')->unsigned();
            $table->bigInteger('id_kota_tujuan')->unsigned();
            $table->foreign('id_kapal')->references('id')->on('kapals');
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
        Schema::dropIfExists('tiket_kapals');
    }
}
