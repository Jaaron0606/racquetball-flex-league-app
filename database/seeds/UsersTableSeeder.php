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
        
        while (count($users) > 1) {
            $user = array_pop($users);
            
            foreach ($users as $opponent) {
                factory(App\Match::class, 5)
                    ->create(['player_one' => $user->name,
                              'player_two' => $opponent->name])
                    ->each(function ($match) {
                        factory(App\Game::class, 3)->create(['match_id' => $match->id]);
                    });
            }
        }
        
        echo 'Users table seed success!';
        echo PHP_EOL;
    }
}
