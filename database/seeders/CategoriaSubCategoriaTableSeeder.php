<?php

namespace Database\Seeders;

use App\Models\ProdutoCategoria;
use App\Models\ProdutoSubcategoria;
use Illuminate\Database\Seeder;

class CategoriaSubCategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produto_categoria = [
            [
                'id' => '1',
                'name' => 'Quadros',
                'icone' => 'quadro',
                'created_at' => now(), 'updated_at' => NULL
            ],
            [
                'id' => '2',
                'name' => 'Carros',
                'icone' => 'carro',
                'created_at' => now(), 'updated_at' => NULL
            ]
        ];


        $subcategorias = [
            [
                'categoria_id' => '1',
                'name' => 'Mosaico 5 Peças 120x60',
                'icone' => 'quadro',
                'created_at' => now(), 'updated_at' => NULL
            ],
            [
                'categoria_id' => '1',
                'name' => 'Mosaico 3 Peças 75x60',
                'icone' => 'quadro',
                'created_at' => now(), 'updated_at' => NULL
            ],
            [
                'categoria_id' => '1',
                'name' => 'Retangular 3 Peças 120x60',
                'icone' => 'quadro',
                'created_at' => now(), 'updated_at' => NULL
            ],
            [
                'categoria_id' => '1',
                'name' => 'Retangular 3 Peças 180x60',
                'icone' => 'quadro',
                'created_at' => now(), 'updated_at' => NULL
            ],
            [
                'categoria_id' => '1',
                'name' => 'Avulso 1 Peça 40x60',
                'icone' => 'quadro',
                'created_at' => now(), 'updated_at' => NULL
            ],
            [
                'categoria_id' => '1',
                'name' => 'Grande Avulso 1 peça 90x120',
                'icone' => 'quadro',
                'created_at' => now(), 'updated_at' => NULL
            ],
        ];


        ProdutoCategoria::insert($produto_categoria);
        ProdutoSubcategoria::insert($subcategorias);


    }
}
