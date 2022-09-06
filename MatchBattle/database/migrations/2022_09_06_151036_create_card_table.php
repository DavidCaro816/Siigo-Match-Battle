<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('category');
            $table->bigInteger('soccer_player_id')->unsigned();
            $table->bigInteger('player_id')->unsigned();


            $table->foreign('soccer_player_id')->references('id')->on('soccer_player');
            $table->foreign('player_id')->references('id')->on('player');
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
        Schema::dropIfExists('card');
    }
}
