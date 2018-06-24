<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id')->unique();
            $table->integer('player_one_score')->nullable();
            $table->integer('player_two_score')->nullable();
            
            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches');
            
            $table->timestamps();
            $table->string('last_updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
