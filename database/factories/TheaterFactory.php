<?php

namespace Database\Factories;

use App\Models\Theater;
use Illuminate\Database\Eloquent\Factories\Factory;

class TheaterFactory extends Factory
{
    protected $model = Theater::class;

    public function definition()
    {
        return [
            'nomor'=>$this->faker->numberBetween(1,10),
            'tipe'=>$this->faker->shuffle(array('Regular', 'Premiere')) ,
            'kapasitas'=>$this->faker->numberBetween(50,100),
        ];
    }
}
