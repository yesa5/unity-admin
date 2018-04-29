<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetOfPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_of_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('cup_id')->unsigned();
            $table->foreign('cup_id')->references('id')->on('cups');
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
        Schema::dropIfExists('set_of_photos');
    }
}
