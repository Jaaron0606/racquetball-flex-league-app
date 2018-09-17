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
                
                // Link the match to the players in the database
                $user->matches()->attach($id);
                $opponent->matches()->attach($id);
            }
        }
        
        echo 'Users table seed success!';
        echo PHP_EOL;
    }
}
