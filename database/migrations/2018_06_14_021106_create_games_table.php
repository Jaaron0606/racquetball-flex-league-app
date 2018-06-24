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
            $table->string('player_one');
            $table->string('player_two');
            $table->integer('player_one_score')->nullable();
            $table->integer('player_two_score')->nullable();
            
            // This will reference the match table primary key (foreigh key)
            // if we use a match table in the data structure.
            $table->unsignedInteger('match_id');
            
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
