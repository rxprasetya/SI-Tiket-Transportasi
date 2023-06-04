<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaskapaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maskapais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_maskapai', 32);
            $table->string('maks_kabin_maskapai', 32);
            $table->string('tempat_duduk_maskapai', 32);
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
        Schema::dropIfExists('maskapais');
    }
}
