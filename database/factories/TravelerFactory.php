<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TravelerFactory extends Factory
{
    /**
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'name_surname' => fake()->firstName(),
            'phone' => fake()->phoneNumber(),
            'passport' => fake()->postcode(),
            'status' => random_int(min:0,max: 1),
            'tour_id' => random_int(min:1,max: 10),
            'user_id' => random_int(min:1,max: 10),
            'paid' => random_int(min:0,max: 1),
        ];
    }
}
