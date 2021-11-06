<?php

namespace Database\Factories;

use App\Models\NowPlaying;
use App\Models\Theater;
use Illuminate\Database\Eloquent\Factories\Factory;

class NowPlayingFactory extends Factory
{
    protected $model = NowPlaying::class;

    public function definition()
    {
        return [
            // 'nomor_theater' => $this->faker->shuffle(Theater::pluck('nomor_theater')->toArray()),
            // 'judul' => $this->faker->text($maxNbChars = 25),
            // 'jam' => $this->faker->time($format = 'H:i:s', $max = '24:00'),
            // 'durasi' => $this->faker->numberBetween(60, 180),
            // 'genre' => $this->faker->shuffle(array('Action', 'Comedy', 'Sci-Fi', 'Horror')),
            // 'deskripsi' => $this->faker->text($maxNbChars = 250),
            // 'cast' => $this->faker->name(),
            // 'poster' => ''
        ];
    }
}
