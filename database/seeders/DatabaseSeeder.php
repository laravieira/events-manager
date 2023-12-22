<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
         'name' => 'Lara Vieira',
         'email' => 'contato@laravieira.me',
         'password' => Hash::make('j4Z7pcVzh!_e9dV7QxVR'),
        ]);

        $this->call([
            CountrySeeder::class,
            CitySeeder::class,
            TagSeeder::class
        ]);
    }
}
