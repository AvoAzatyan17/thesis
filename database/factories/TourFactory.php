<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TourFactory extends Factory
{

    /**
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'start_country' => fake()->city(),
            'end_country' => fake()->city(),
            'start_date' => fake()->dateTimeThisMonth()->format('Y-m-d'),
            'end_date' => fake()->dateTimeThisMonth()->format('Y-m-d'),
            'count' => random_int(min:20,max: 120),
            'status' => random_int(min:0,max: 1),
            'description' => fake()->text(),
        ];
    }
}
