<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChatFactory extends Factory
{
    /**
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'send_from_id' => random_int(min:1,max: 10),
            'send_to_id' => random_int(min:1,max: 10),
        ];
    }
}
