<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Seeder;

class CidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cidades = [
            [
                'id' => 1,
                'name' => 'Poços de Caldas',
                'uf' => 'MG'
            ],
            [
                'id' => 2,
                'name' => 'Alfenas',
                'uf' => 'MG'
            ],
            [
                'id' => 3,
                'name' => 'Andradas',
                'uf' => 'MG'
            ],
            [
                'id' => 4,
                'name' => 'São João da Boa Vista',
                'uf' => 'SP'
            ]
        ];

        Cidade::insert($cidades);
    }
}
