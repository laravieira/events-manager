<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            GallerySeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            TagSeeder::class,
            EventSeeder::class,
            SavedEventSeeder::class,
            CommentSeeder::class,
            BookingSeeder::class,
            LikeSeeder::class,
        ]);
    }
}
