<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create(['name' => 'Ana Oliveira', 'email' => 'ana.oliveira@exemplo.com', 'password' => Hash::make('password')]);
        User::factory()->create(['name' => 'Pedro Santos', 'email' => 'pedro.santos@exemplo.com', 'password' => Hash::make('password')]);
        User::factory()->create(['name' => 'Mariana Costa', 'email' => 'mariana.costa@exemplo.com', 'password' => Hash::make('password')]);
        User::factory()->create(['name' => 'Lucas Rodrigues', 'email' => 'lucas.rodrigues@exemplo.com', 'password' => Hash::make('password')]);
        User::factory()->create(['name' => 'Isabela Gomes', 'email' => 'isabela.gomes@exemplo.com', 'password' => Hash::make('password')]);
        User::factory()->create(['name' => 'Rafael Ferreira', 'email' => 'rafael.ferreira@exemplo.com', 'password' => Hash::make('password')]);
        User::factory()->create(['name' => 'Camila Silva', 'email' => 'camila.silva@exemplo.com', 'password' => Hash::make('password')]);
        User::factory()->create(['name' => 'Gustavo Pereira', 'email' => 'gustavo.pereira@exemplo.com', 'password' => Hash::make('password')]);
        User::factory()->create(['name' => 'Larissa Jesus', 'email' => 'larissa.jesus@exemplo.com', 'password' => Hash::make('password')]);
        User::factory()->create(['name' => 'Diego Souza', 'email' => 'diego.souza@exemplo.com', 'password' => Hash::make('password')]);
    }
}
