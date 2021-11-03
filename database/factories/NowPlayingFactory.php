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
            'tanggal' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+ 14 days', $timezone = 'Jakarta'),
            'jam' => $this->faker->time($format = 'H:i:s', $max = '24:00'),
            'durasi' => $this->faker->numberBetween(60, 180),
            'judul' => $this->faker->catchPhrase(),
            'poster' => '',
            'genre' => $this->faker->shuffle(array('Action', 'Comedy', 'Sci-Fi', 'Horror')),
            'deskripsi' => $this->faker->text($maxNbChars = 250),
            'cast' => $this->faker->name(),
            'fk_theater' => shuffle(array(Theater::all()->pluck('id_theater')))
        ];
    }
}
