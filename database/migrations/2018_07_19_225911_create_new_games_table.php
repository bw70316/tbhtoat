<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year');
            $table->integer('game');
            $table->string('team');
            $table->integer('win');
            $table->integer('loss');
            $table->string('stage');
            $table->string('round');
            $table->string('stageSeries');
            $table->integer('seriesGame');
            $table->string('awayTeam');
            $table->string('homeTeam');
            $table->integer('awayWin');
            $table->integer('awayLoss');
            $table->integer('awayTie');
            $table->integer('homeWin');
            $table->integer('homeLoss');
            $table->integer('homeTie');
            $table->integer('awayScore');
            $table->integer('awayShots');
            $table->integer('homeShots');
            $table->integer('ot');
            $table->integer('ottwo');
            $table->integer('otthree');
            $table->integer('elimination');
            $table->integer('foreiture');
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
        Schema::dropIfExists('new_games');
    }
}
