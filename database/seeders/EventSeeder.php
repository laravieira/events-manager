<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory()->create([
            'name' => 'Laravel Event',
            'slug' => 'laravel-event',
            'description' => 'Laravel events are a way to trigger and handle specific actions or tasks within your application. They follow the observer pattern, where an event is fired or raised, and one or more listeners are responsible for handling that event.',
            'image' => 'public/events/eIbWoeX1ISvaDcKuTrdZDgCatJhb6b4joKIu2cBK.jpg',
            'country_id' => 1,
            'city_id' => 1,
            'user_id' => 1,
            'start_date' => new Date('2021-10-10'),
            'end_date' => new Date('2021-10-12'),
        ]);
        Event::factory()->create([
            'name' => 'Vue.js Event',
            'slug' => 'vuejs-event',
            'description' => 'Vue.js is an open-source model–view–viewmodel front end JavaScript framework for building user interfaces and single-page applications.',
            'image' => 'public/events/nZY71bXNAKCto5guMtbhjBru2Y5Uo0DHTqjSHI01.jpg',
            'country_id' => 1,
            'city_id' => 1,
            'user_id' => 1,
            'start_date' => new Date('2021-10-10'),
            'end_date' => new Date('2021-10-12'),
        ]);
    }
}
