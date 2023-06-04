<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanKapalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_kapals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_tiket_kapal')->unsigned();
            $table->date('tanggal_pesan_kapal');
            $table->integer('jumlah_pesan_kapal');
            $table->foreign('id_tiket_kapal')->references('id')->on('tiket_kapals');
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
        Schema::dropIfExists('pesan_kapals');
    }
}
