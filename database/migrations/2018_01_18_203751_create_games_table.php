<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('year');
            $table->integer('level_id')->unsigned()->index();
            $table->integer('team_id')->unsigned()->index();
            $table->integer('option_id')->unsigned()->index();
            $table->integer('homeScore')->unsigned()->index();
            $table->integer('awayScore')->unsigned()->index();
            $table->integer('win_id')->unsigned()->index();
            $table->integer('homeShots')->unsigned()->index();
            $table->integer('awayShots')->unsigned()->index();
            $table->string('tie');
            $table->integer('overtime_id')->unsigned()->index();
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
        Schema::drop('games');
    }
}
