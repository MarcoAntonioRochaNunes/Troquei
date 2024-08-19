<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            ['nome' => 'Acre', 'uf' => 'AC'],
            ['nome' => 'Alagoas', 'uf' => 'AL'],
            ['nome' => 'Amapá', 'uf' => 'AP'],
            ['nome' => 'Amazonas', 'uf' => 'AM'],
            ['nome' => 'Bahia', 'uf' => 'BA'],
            ['nome' => 'Ceará', 'uf' => 'CE'],
            ['nome' => 'Distrito Federal', 'uf' => 'DF'],
            ['nome' => 'Espírito Santo', 'uf' => 'ES'],
            ['nome' => 'Goiás', 'uf' => 'GO'],
            ['nome' => 'Maranhão', 'uf' => 'MA'],
            ['nome' => 'Mato Grosso', 'uf' => 'MT'],
            ['nome' => 'Mato Grosso do Sul', 'uf' => 'MS'],
            ['nome' => 'Minas Gerais', 'uf' => 'MG'],
            ['nome' => 'Pará', 'uf' => 'PA'],
            ['nome' => 'Paraíba', 'uf' => 'PB'],
            ['nome' => 'Paraná', 'uf' => 'PR'],
            ['nome' => 'Pernambuco', 'uf' => 'PE'],
            ['nome' => 'Piauí', 'uf' => 'PI'],
            ['nome' => 'Rio de Janeiro', 'uf' => 'RJ'],
            ['nome' => 'Rio Grande do Norte', 'uf' => 'RN'],
            ['nome' => 'Rio Grande do Sul', 'uf' => 'RS'],
            ['nome' => 'Rondônia', 'uf' => 'RO'],
            ['nome' => 'Roraima', 'uf' => 'RR'],
            ['nome' => 'Santa Catarina', 'uf' => 'SC'],
            ['nome' => 'São Paulo', 'uf' => 'SP'],
            ['nome' => 'Sergipe', 'uf' => 'SE'],
            ['nome' => 'Tocantins', 'uf' => 'TO'],
        ];

        Estado::insert($estados);
    }
}
