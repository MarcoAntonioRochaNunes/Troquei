<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(EstadoSeeder::class);
        $this->call(CategoriaSeeder::class);

        User::factory()->create([
            'name' => 'Teste User',
            'email' => 'teste@teste.com',
            'password' => 123456,
        ]);
    }
}
