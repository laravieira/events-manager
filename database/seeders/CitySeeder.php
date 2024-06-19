<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::factory()->create(['country_id' => 1, 'region' => 'SP', 'name' => 'São Paulo']);
        City::factory()->create(['country_id' => 1, 'region' => 'RJ', 'name' => 'Rio de Janeiro']);
        City::factory()->create(['country_id' => 1, 'region' => 'MG', 'name' => 'Belo Horizonte']);
        City::factory()->create(['country_id' => 1, 'region' => 'PR', 'name' => 'Curitiba']);
        City::factory()->create(['country_id' => 1, 'region' => 'RS', 'name' => 'Porto Alegre']);
        City::factory()->create(['country_id' => 1, 'region' => 'DF', 'name' => 'Brasília']);
        City::factory()->create(['country_id' => 1, 'region' => 'BA', 'name' => 'Salvador']);
        City::factory()->create(['country_id' => 1, 'region' => 'CE', 'name' => 'Fortaleza']);
        City::factory()->create(['country_id' => 1, 'region' => 'AM', 'name' => 'Manaus']);
        City::factory()->create(['country_id' => 1, 'region' => 'PB', 'name' => 'João Pessoa']);
        City::factory()->create(['country_id' => 1, 'region' => 'PE', 'name' => 'Recife']);
        City::factory()->create(['country_id' => 1, 'region' => 'RN', 'name' => 'Natal']);
        City::factory()->create(['country_id' => 1, 'region' => 'AL', 'name' => 'Maceió']);
        City::factory()->create(['country_id' => 1, 'region' => 'SE', 'name' => 'Aracaju']);
        City::factory()->create(['country_id' => 1, 'region' => 'SC', 'name' => 'Florianópolis']);
        City::factory()->create(['country_id' => 1, 'region' => 'ES', 'name' => 'Vitória']);
        City::factory()->create(['country_id' => 1, 'region' => 'GO', 'name' => 'Goiânia']);
        City::factory()->create(['country_id' => 1, 'region' => 'MT', 'name' => 'Cuiabá']);
        City::factory()->create(['country_id' => 1, 'region' => 'MS', 'name' => 'Campo Grande']);
        City::factory()->create(['country_id' => 1, 'region' => 'PI', 'name' => 'Teresina']);
        City::factory()->create(['country_id' => 1, 'region' => 'MA', 'name' => 'São Luís']);
        City::factory()->create(['country_id' => 1, 'region' => 'PA', 'name' => 'Belém']);
        City::factory()->create(['country_id' => 1, 'region' => 'RO', 'name' => 'Porto Velho']);
        City::factory()->create(['country_id' => 1, 'region' => 'RR', 'name' => 'Boa Vista']);
        City::factory()->create(['country_id' => 1, 'region' => 'TO', 'name' => 'Palmas']);
        City::factory()->create(['country_id' => 1, 'region' => 'AC', 'name' => 'Rio Branco']);
        City::factory()->create(['country_id' => 1, 'region' => 'MG', 'name' => 'Juiz de Fora']);
        City::factory()->create(['country_id' => 1, 'region' => 'MG', 'name' => 'Chácara']);
        City::factory()->create(['country_id' => 1, 'region' => 'RJ', 'name' => 'Barra do Piraí']);

        City::factory()->create(['country_id' => 2, 'region' => 'NY', 'name' => 'New York']);
        City::factory()->create(['country_id' => 2, 'region' => 'CA', 'name' => 'Los Angeles']);
        City::factory()->create(['country_id' => 2, 'region' => 'IL', 'name' => 'Chicago']);
        City::factory()->create(['country_id' => 2, 'region' => 'TX', 'name' => 'Houston']);
        City::factory()->create(['country_id' => 2, 'region' => 'AZ', 'name' => 'Phoenix']);
        City::factory()->create(['country_id' => 2, 'region' => 'PA', 'name' => 'Philadelphia']);
        City::factory()->create(['country_id' => 2, 'region' => 'TX', 'name' => 'San Antonio']);
        City::factory()->create(['country_id' => 2, 'region' => 'CA', 'name' => 'San Diego']);
        City::factory()->create(['country_id' => 2, 'region' => 'TX', 'name' => 'Dallas']);
        City::factory()->create(['country_id' => 2, 'region' => 'CA', 'name' => 'San Jose']);
        City::factory()->create(['country_id' => 2, 'region' => 'TX', 'name' => 'Austin']);
        City::factory()->create(['country_id' => 2, 'region' => 'FL', 'name' => 'Jacksonville']);
        City::factory()->create(['country_id' => 2, 'region' => 'TX', 'name' => 'Fort Worth']);
        City::factory()->create(['country_id' => 2, 'region' => 'OH', 'name' => 'Columbus']);
        City::factory()->create(['country_id' => 2, 'region' => 'CA', 'name' => 'San Francisco']);

        City::factory()->create(['country_id' => 3, 'region' => 'ON', 'name' => 'Toronto']);
        City::factory()->create(['country_id' => 3, 'region' => 'QC', 'name' => 'Montreal']);
        City::factory()->create(['country_id' => 3, 'region' => 'BC', 'name' => 'Vancouver']);
        City::factory()->create(['country_id' => 3, 'region' => 'AB', 'name' => 'Calgary']);
    }
}
