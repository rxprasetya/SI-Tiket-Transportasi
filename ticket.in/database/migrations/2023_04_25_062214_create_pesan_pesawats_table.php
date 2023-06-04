<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanPesawatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_pesawats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_tiket_pesawat')->unsigned();
            $table->date('tanggal_pesan_pesawat');
            $table->integer('jumlah_pesan_pesawat');
            $table->foreign('id_tiket_pesawat')->references('id')->on('tiket_pesawats');
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
        Schema::dropIfExists('pesan_pesawats');
    }
}
