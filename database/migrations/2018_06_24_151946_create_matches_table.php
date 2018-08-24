<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id')->unique();
            
            // $table->string('player_one');
            $table->unsignedInteger('player_one_id');
            $table->foreign('player_one_id')->references('id')->on('users');
            
            // $table->string('player_two');
            $table->unsignedInteger('player_two_id');
            $table->foreign('player_two_id')->references('id')->on('users');
            
            // Total score for the match;
            $table->integer('player_one_total')->nullable();
            $table->integer('player_two_total')->nullable();
            
            // This could be the name of the league, or the league id from a leagues table.
            $table->string('league_name');
            
            // This could be the name of the division (skill level), or the division id...
            $table->string('division_name');
            
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
        Schema::dropIfExists('matches');
    }
}
