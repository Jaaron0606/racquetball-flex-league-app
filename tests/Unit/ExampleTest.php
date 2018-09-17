<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testBasicTest()
    // {
    //     $this->assertTrue(true);
    // }
    
    public function testGameScores()
    {
        $games = \App\Game::all();
        
        foreach ($games as $game) 
        {
            echo PHP_EOL;
            echo $game->player_one_score;
            echo ' ';
            echo $game->player_two_score;
        }
        
        echo PHP_EOL;
        echo 'Total games seeded: ', $games->count();
        
        $this->assertTrue(true);
    }
    
    public function testMatchScores()
    {
        $matches = \App\Match::all();
        
        foreach ($matches as $match) 
        {
            echo PHP_EOL;
            echo $match->player_one_total;
            echo ' ';
            echo $match->player_two_total;
        }
        
        echo PHP_EOL;
        echo 'Total matches seeded: ', $matches->count();
        
        $this->assertTrue(true);
    }
    
    public function testFactoryLogic()
    {
        echo PHP_EOL;
        echo "What type does a factory return? Answer: ";
        
        $cr8n_obj = factory(\App\User::class, 5)->make();
             
        echo gettype($cr8n_obj);
        echo PHP_EOL;
        
        $this->assertTrue(true);
    }
    
    public function testMatchUserRelationship()
    {
        $user = \App\User::first();
        $match = \App\Match::first();
        
        $userHasMatches = $user->matches->count() > 0;
        $matchHasUsers = $match->users->count() == 2;
        
        $this->assertTrue($userHasMatches && $matchHasUsers);
    }
}
