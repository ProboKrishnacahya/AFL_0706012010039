<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationNowPlayingTheater extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('now_playing', function (Blueprint $table) {
            $table->foreign('nomor_theater')
            ->references('nomor_theater')->on('theater')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('now_playing', function (Blueprint $table) {

        });
    }
}
