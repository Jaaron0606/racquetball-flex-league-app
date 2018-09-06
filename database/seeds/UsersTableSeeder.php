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
        $cr8n_obj = factory(\App\User::class, 1)->create(
            ['name' => 'Creighton Magoun',
             'email' => 'magoun@gmail.com',
             'password' => 'password']);
             
             
        
        while (count($users) > 1) {
            $user = array_pop($users);
            
            foreach ($users as $opponent) {
                $id = DB::table('matches')->insertGetId(
                    ['player_one_id' => $user->id,
                     'player_two_id' => $opponent->id,
                     'league_name' => 'Test League',
                     'division_name' => 'PHP Elite']
                );
                
                factory(App\Game::class, 3)->create(['match_id' => $id]);
                
                
                
                // Old way, with Match Factory
                
                // factory(App\Match::class, 1)
                //     ->create(['player_one_id' => $user->id,
                //               'player_two_id' => $opponent->id])
                //     ->each(function ($match) {
                //         factory(App\Game::class, 3)->create(['match_id' => $match->id]);
                //     });
            }
        }
        
        echo 'Users table seed success!';
        echo PHP_EOL;
    }
}
