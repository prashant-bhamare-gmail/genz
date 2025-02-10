<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Event;
use Carbon\Carbon;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     //
     public function run() {
        $faker = Faker::create();

        $categories = ['Technology', 'Music', 'Business', 'Sports', 'Education'];
        $statuses = ['upcoming', 'ongoing', 'completed'];

        for ($i = 0; $i < 5; $i++) {
            Event::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(3),
                'image' => 'https://picsum.photos/640/480?random=' . $i, // Dummy image from Lorem Picsum
                'event_date' => Carbon::now()->addDays(rand(10, 100))->format('Y-m-d'),
                'event_time' => $faker->time(),
                'location' => $faker->city . ', ' . $faker->country,
                'capacity' => rand(100, 1000),
                'price' => rand(10, 100),
                'organizer' => $faker->company,
                'category' => $categories[array_rand($categories)],
                'status' => $statuses[array_rand($statuses)],
            ]);
        }
    }
}
