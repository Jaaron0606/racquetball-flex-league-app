<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(FallLeagueSeeder::class);
        
        // Adds fake users and a test league
        // Adds completed and incomplete matches
        $this->call(TestDataSeeder::class);
    }
}
