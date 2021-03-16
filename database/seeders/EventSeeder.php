<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::factory(100)
            ->has(Image::factory()->count(5))
            ->create();
    }
}
