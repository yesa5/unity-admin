<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->integer('team_id');
            $table->text('photo');
            $table->integer('disqualification_id')->unsigned();
            $table->integer('yellow_cards_id')->unsigned();
            $table->foreign('disqualification_id')->references('id')->on('disqualifications');
            $table->foreign('yellow_cards_id')->references('id')->on('yellow_cards');
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
        Schema::dropIfExists('player');
    }
}
