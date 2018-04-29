<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('player_id')->unsigned();
            $table->integer('team_from')->unsigned();
            $table->integer('team_to')->unsigned();
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('team_from')->references('id')->on('teams');
            $table->foreign('team_to')->references('id')->on('teams');
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
        Schema::dropIfExists('transfer');
    }
}
