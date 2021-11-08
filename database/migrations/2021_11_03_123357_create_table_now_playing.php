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
            $table->string('movie_code')->nullable(true);
            $table->string('judul');
            $table->string('jam')->nullable(false);
            $table->integer('durasi')->nullable(false);
            $table->string('genre')->nullable(false);
            $table->string('deskripsi')->nullable(false);
            $table->string('cast')->nullable(false);
            // $table->string('poster');
            $table->bigInteger('nomor_theater')->unsigned();
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
