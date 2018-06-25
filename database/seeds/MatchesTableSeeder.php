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
        // $games = factory(App\Game::class, 3)->create(['match_id' => $matches[0]->id]);
        $games = factory(App\Game::class, 3)->make();
        
        echo $games;
        
        $matches = factory(App\Match::class, 5)
          ->create()
          ->each(function ($match) {
                $match->games()->save($games);
            });
        
        // $matches = factory(App\Match::class, 5)->create();
        
        // echo PHP_EOL;
        echo "Success\n";
    }
}
