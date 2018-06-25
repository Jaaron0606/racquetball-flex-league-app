<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    $winner = rand(1,2);
    $loser_score = rand(0,10);
    
    if ($winner == 1) {
        return [
            'player_one_score' => 15,
            'player_two_score' => $loser_score,
            'last_updated_by' => 'gameFactory'
        ];
    } 
    else {
        return [
            'player_one_score' => $loser_score,
            'player_two_score' => 15,
            'last_updated_by' => 'gameFactory'
        ];
    }
});
