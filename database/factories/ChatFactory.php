<?php

namespace Database\Factories;

use App\Models\Chat;
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
            'message' => fake()->text(),
            'unread' => random_int(min:1,max: 2)
        ];
    }
}
