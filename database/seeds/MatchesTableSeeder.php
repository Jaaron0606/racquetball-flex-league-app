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
        factory(App\Match::class, 5)
          ->create()
          ->each(function ($match) {
                factory(App\Game::class, 3)->create(['match_id' => $match->id]);
            });
    }
}
