<?php

use Faker\Generator as Faker;

$factory->define(App\Match::class, function (Faker $faker) {
    return [
        'player_one' => $faker->name(),
        'player_two' => $faker->name(),
    ];
});
