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
    
    public function testModelSeeders()
    {
        $games = \App\Game::all();
        
        $games = $games->filter(function($game)
        {
            return ($game->id % 3) == 0;
        });
        
        foreach ($games as $game) 
        {
            if ($game->player_one_score == 15) 
            {
                $game->player_one_score = 11;
            } 
            elseif ($game->player_two_score == 15)
            {
                $game->player_two_score = 11;
            }
            
            $game->save();
        }
        
        $games = \App\Game::all();
        
        foreach ($games as $game) 
        {
            echo PHP_EOL;
            // echo $game->match->player_one;
            // echo $game->match->player_two;
            echo $game->player_one_score;
            echo ' ';
            echo $game->player_two_score;
        }
        
        
        
        echo PHP_EOL;
        echo $games->count();
        echo "\nSuccess\n";
        
        $this->assertTrue(true);
    }
    
    public function testFactoryLogic()
    {
        echo PHP_EOL;
        echo "What type does a factory return?";
        
        $cr8n_obj = factory(\App\User::class, 5)->make();
             
        // var_dump($cr8n_obj);
        echo PHP_EOL;
        echo gettype($cr8n_obj);
        echo PHP_EOL;
        
        $this->assertTrue(true);
    }
}
