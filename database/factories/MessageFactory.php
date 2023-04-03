<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{

    /**
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'chat_id' => random_int(min:1,max: 20),
            'message' => fake()->text,
            'read' => random_int(min:0,max: 1)
        ];
    }
}
