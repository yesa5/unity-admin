    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('red_card', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_result_id')->unsigned();
            $table->integer('player_id')->unsigned();
            $table->integer('min');
            $table->foreign('game_result_id')->references('id')->on('game_results');
            $table->foreign('player_id')->references('id')->on('players');
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
        Schema::dropIfExists('red_card');
    }
}
