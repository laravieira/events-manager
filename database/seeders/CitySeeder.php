<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::factory()->create(['name' => 'São Paulo', 'region' => 'SP', 'country_id' => 1]);
        City::factory()->create(['name' => 'Rio de Janeiro', 'region' => 'RJ', 'country_id' => 1]);
        City::factory()->create(['name' => 'Belo Horizonte', 'region' => 'MG', 'country_id' => 1]);
        City::factory()->create(['name' => 'Curitiba', 'region' => 'PR', 'country_id' => 1]);
        City::factory()->create(['name' => 'Porto Alegre', 'region' => 'RS', 'country_id' => 1]);
        City::factory()->create(['name' => 'Brasília', 'region' => 'DF', 'country_id' => 1]);
        City::factory()->create(['name' => 'Salvador', 'region' => 'BA', 'country_id' => 1]);
        City::factory()->create(['name' => 'Fortaleza', 'region' => 'CE', 'country_id' => 1]);
        City::factory()->create(['name' => 'Manaus', 'region' => 'AM', 'country_id' => 1]);
        City::factory()->create(['name' => 'João Pessoa', 'region' => 'PB', 'country_id' => 1]);
        City::factory()->create(['name' => 'Recife', 'region' => 'PE', 'country_id' => 1]);
        City::factory()->create(['name' => 'Natal', 'region' => 'RN', 'country_id' => 1]);
        City::factory()->create(['name' => 'Maceió', 'region' => 'AL', 'country_id' => 1]);
        City::factory()->create(['name' => 'Aracaju', 'region' => 'SE', 'country_id' => 1]);
        City::factory()->create(['name' => 'Florianópolis', 'region' => 'SC', 'country_id' => 1]);
        City::factory()->create(['name' => 'Vitória', 'region' => 'ES', 'country_id' => 1]);
        City::factory()->create(['name' => 'Goiânia', 'region' => 'GO', 'country_id' => 1]);
        City::factory()->create(['name' => 'Cuiabá', 'region' => 'MT', 'country_id' => 1]);
        City::factory()->create(['name' => 'Campo Grande', 'region' => 'MS', 'country_id' => 1]);
        City::factory()->create(['name' => 'Teresina', 'region' => 'PI', 'country_id' => 1]);
        City::factory()->create(['name' => 'São Luís', 'region' => 'MA', 'country_id' => 1]);
        City::factory()->create(['name' => 'Belém', 'region' => 'PA', 'country_id' => 1]);
        City::factory()->create(['name' => 'Porto Velho', 'region' => 'RO', 'country_id' => 1]);
        City::factory()->create(['name' => 'Boa Vista', 'region' => 'RR', 'country_id' => 1]);
        City::factory()->create(['name' => 'Palmas', 'region' => 'TO', 'country_id' => 1]);
        City::factory()->create(['name' => 'Rio Branco', 'region' => 'AC', 'country_id' => 1]);
        City::factory()->create(['name' => 'Juiz de Fora', 'region' => 'MG', 'country_id' => 1]);
        City::factory()->create(['name' => 'Chácara', 'region' => 'MG', 'country_id' => 1]);
        City::factory()->create(['name' => 'Barra do Piraí', 'region' => 'RJ', 'country_id' => 1]);

        City::factory()->create(['country_id' => 2, 'name' => 'New York', 'region' => 'NY']);
        City::factory()->create(['country_id' => 2, 'name' => 'Los Angeles', 'region' => 'CA']);
        City::factory()->create(['country_id' => 2, 'name' => 'Chicago', 'region' => 'IL']);
        City::factory()->create(['country_id' => 2, 'name' => 'Houston', 'region' => 'TX']);
        City::factory()->create(['country_id' => 2, 'name' => 'Phoenix', 'region' => 'AZ']);
        City::factory()->create(['country_id' => 2, 'name' => 'Philadelphia', 'region' => 'PA']);
        City::factory()->create(['country_id' => 2, 'name' => 'San Antonio', 'region' => 'TX']);
        City::factory()->create(['country_id' => 2, 'name' => 'San Diego', 'region' => 'CA']);
        City::factory()->create(['country_id' => 2, 'name' => 'Dallas', 'region' => 'TX']);
        City::factory()->create(['country_id' => 2, 'name' => 'San Jose', 'region' => 'CA']);
        City::factory()->create(['country_id' => 2, 'name' => 'Austin', 'region' => 'TX']);
        City::factory()->create(['country_id' => 2, 'name' => 'Jacksonville', 'region' => 'FL']);
        City::factory()->create(['country_id' => 2, 'name' => 'Fort Worth', 'region' => 'TX']);
        City::factory()->create(['country_id' => 2, 'name' => 'Columbus', 'region' => 'OH']);
        City::factory()->create(['country_id' => 2, 'name' => 'San Francisco', 'region' => 'CA']);

        City::factory()->create(['country_id' => 3, 'name' => 'Toronto', 'region' => 'ON']);
        City::factory()->create(['country_id' => 3, 'name' => 'Montreal', 'region' => 'QC']);
        City::factory()->create(['country_id' => 3, 'name' => 'Vancouver', 'region' => 'BC']);
        City::factory()->create(['country_id' => 3, 'name' => 'Calgary', 'region' => 'AB']);
    }
}
