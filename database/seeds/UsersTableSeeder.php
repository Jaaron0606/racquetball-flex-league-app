<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_obj = factory(App\User::class, 5)->create();
        
        $users = Array();
        
        foreach ($users_obj as $user) {
            array_push($users, $user);
        }
        
        // Add myself, for testing
        $cr8n_obj = factory(App\User::class, 1)->create(
            ['name' => 'Creighton Magoun',
             'email' => 'magoun@gmail.com',
             'password' => bcrypt('password')]);
             
        array_push($users, $cr8n_obj[0]);
        
        // Generate a round-robin style match record
        while (count($users) > 1) {
            $user = array_pop($users);
            
            foreach ($users as $opponent) {
                $id = DB::table('matches')->insertGetId(
                    ['player_one_id' => $user->id,
                     'player_two_id' => $opponent->id,
                     'league_name' => 'Test League',
                     'division_name' => 'PHP Elite']
                );
                
                $games = factory(App\Game::class, 3)->create(['match_id' => $id]);
                
                // Calculate match total
                $userTotal = 0;
                $opponentTotal = 0;
                
                foreach ($games as $game) {
                    // Third game in a match is played to 11 instead of 15
                    if ($game->id % 3 == 0) {
                        $game->player_one_score -= 4;
                        $game->player_two_score -= 4;
                        $game->save();
                    }
                    
                    $p1Score = $game->player_one_score;
                    $p2Score = $game->player_two_score;
                    
                    // Add 5 points to the winners total
                    $p1Score > $p2Score ? $p1Score += 5 : $p2Score += 5;
                    
                    $userTotal += $p1Score;
                    $opponentTotal += $p2Score;
                }
                
                // Add match total to matches table
                $match = App\Match::find($id);
                $match->player_one_total = $userTotal;
                $match->player_two_total = $opponentTotal;
                $match->save();
                
                echo $match;
                echo PHP_EOL;
                
                // Link the match to the players in the database
                $user->matches()->attach($id);
                $opponent->matches()->attach($id);
            }
        }
        
        echo 'Users table seed success!';
        echo PHP_EOL;
    }
}
