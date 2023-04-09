<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\Tour;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
         User::factory(10)->create();
         Chat::factory(10)->create();
         Message::factory(10)->create();
         Tour::factory(10)->create();
    }
}
