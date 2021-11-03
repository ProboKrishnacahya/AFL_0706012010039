<?php

namespace Database\Seeders;

use App\Models\NowPlaying;
use Illuminate\Database\Seeder;

class NowPlayingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NowPlaying::factory()->count(50)->create();
    }
}
