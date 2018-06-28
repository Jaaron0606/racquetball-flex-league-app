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
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    
    public function testModelSeeders()
    {
        $test = \App\Game::find(10)->match;
        $player = $test->player_one;
        // $test2 = \App\Game
        
        echo PHP_EOL;
        echo $player;
        echo "\nSuccess\n";
        
        $this->assertTrue(true);
    }
}
