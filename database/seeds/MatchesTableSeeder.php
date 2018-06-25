<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = factory(App\Match::class, 5)
           ->create()
           ->each(function ($match) {
                $match->games()->save(factory(App\Game::class, 3)->make());
            });
    }
}
