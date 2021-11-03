<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNowPlaying extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('now_playing', function (Blueprint $table) {
            $table->id('id_now_playing');
            $table->date('tanggal');
            $table->string('jam');
            $table->integer('durasi');
            $table->string('nama_film');
            $table->integer('fk_theater')->foreign('fk_theater')->references('id')->on('theater');
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
        Schema::dropIfExists('now_playing');
    }
}
