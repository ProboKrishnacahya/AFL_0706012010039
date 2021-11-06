<?php

namespace Database\Seeders;

use App\Models\NowPlaying;
use App\Models\Theater;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theater')->insert([
            'nomor_theater' => 1,
            'tipe' => 'Regular',
            'kapasitas' => 100,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('theater')->insert([
            'nomor_theater' => 2,
            'tipe' => 'Premiere',
            'kapasitas' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('now_playing')->insert([
            'movie_code' => 'AVENG',
            'nomor_theater' => 1,
            'judul' => 'Avengers Endgame',
            'jam' => '15.00',
            'durasi' => 180,
            'genre' => 'Action, Sci-Fi',
            'deskripsi' => 'Lorem Ipsum',
            'cast' => 'Steve Rogers',
            // 'poster'
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('now_playing')->insert([
            'movie_code' => 'AVENG',
            'nomor_theater' => 2,
            'judul' => 'Avengers Endgame',
            'jam' => '15.00',
            'durasi' => 180,
            'genre' => 'Action, Sci-Fi',
            'deskripsi' => 'Lorem Ipsum',
            'cast' => 'Steve Rogers',
            // 'poster'
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('now_playing')->insert([
            'movie_code' => 'NO TI',
            'nomor_theater' => 1,
            'judul' => 'No Time to Die',
            'jam' => '22.00',
            'durasi' => 120,
            'genre' => 'Action',
            'deskripsi' => 'film keren',
            'cast' => 'Daniel Craig',
            // 'poster'
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('now_playing')->insert([
            'movie_code' => 'NO TI',
            'nomor_theater' => 2,
            'judul' => 'No Time to Die',
            'jam' => '22.00',
            'durasi' => 120,
            'genre' => 'Action',
            'deskripsi' => 'film keren',
            'cast' => 'Daniel Craig',
            // 'poster'
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        //?DatabaseSeeder jalankan semua Seeder didalam call([])
        // $this->call([
        //     TheaterSeeder::class,
        //     NowPlayingSeeder::class
        // ]);
    }
}
