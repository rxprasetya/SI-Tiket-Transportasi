<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanKeretasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_keretas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_tiket_kereta')->unsigned();
            $table->date('tanggal_pesan_kereta');
            $table->integer('jumlah_pesan_kereta');
            $table->foreign('id_tiket_kereta')->references('id')->on('tiket_keretas');
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
        Schema::dropIfExists('pesan_keretas');
    }
}
