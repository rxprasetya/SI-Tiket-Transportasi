<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_berangkat');
            $table->date('tanggal_datang');
            $table->time('waktu_berangkat');
            $table->time('waktu_datang');
            $table->bigInteger('id_jadwal_untuk')->unsigned();
            $table->foreign('id_jadwal_untuk')->references('id')->on('jadwal_untuks');
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
        Schema::dropIfExists('jadwals');
    }
}
