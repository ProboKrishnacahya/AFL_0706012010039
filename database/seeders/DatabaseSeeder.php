<?php

namespace Database\Seeders;

use App\Models\NowPlaying;
use App\Models\Theater;
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
        $this->call([
            TheaterSeeder::class,
            NowPlayingSeeder::class
        ]);
    }
}
