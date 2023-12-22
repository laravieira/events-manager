<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::factory()->create(['name' => 'Brasil']);
        Country::factory()->create(['name' => 'Estados Unidos']);
        Country::factory()->create(['name' => 'Argentina']);
        Country::factory()->create(['name' => 'Chile']);
    }
}
