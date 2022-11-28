<?php

namespace Database\Factories;

use Faker\Provider\DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'movie_name' => $this->faker->name(),
            'time_show' => $this->faker->dateTime(),
        ];
    }
}
