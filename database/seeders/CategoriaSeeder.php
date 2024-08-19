<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['nome' => 'Eletrônicos'],
            ['nome' => 'Veículos'],
            ['nome' => 'Imóveis'],
            ['nome' => 'Moda e Beleza'],
            ['nome' => 'Casa e Jardim'],
            ['nome' => 'Esportes e Lazer'],
            ['nome' => 'Serviços'],
            ['nome' => 'Animais'],
            ['nome' => 'Empregos'],
            ['nome' => 'Negócios'],
            ['nome' => 'Colecionáveis e Antiguidades'],
            ['nome' => 'Música, Filmes e Hobbies'],
            ['nome' => 'Bebês e Crianças'],
            ['nome' => 'Saúde e Bem-estar'],
            ['nome' => 'Agricultura'],
            ['nome' => 'Tecnologia e Inovação'],
            ['nome' => 'Educação'],
            ['nome' => 'Alimentos e Bebidas'],
            ['nome' => 'Eventos e Festas'],
            ['nome' => 'Comunicação e Segurança'],
        ];

        Categoria::insert($categorias);
    }
}
