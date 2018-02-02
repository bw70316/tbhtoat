<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
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
            $table->integer('user_id')->unsigned()->index();
            $table->integer('name_id')->unsigned()->index();
            $table->integer('position_id')->unsigned()->index();
            $table->integer('option_id')->unsigned()->index();
            $table->string('gw_goal');
            $table->integer('goals_scored')->unsigned()->index();
            $table->integer('assists')->unsigned()->index();
            $table->integer('saves')->unsigned()->index();
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
        Schema::drop('players');
    }
}
