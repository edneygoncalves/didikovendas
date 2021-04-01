<?php

namespace Database\Seeders;

use App\Models\VendaTipo;
use Illuminate\Database\Seeder;

class VendaTipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipo = [
            [
                'id' => 1,
                'name' => 'Entrega Pessoal',
                'icone' => 'status'
            ],
            [
                'id' => 2,
                'name' => 'Motoboy/Alfenas',
                'icone' => 'status'
            ],
            [
                'id' => 3,
                'name' => 'Mercado Livre',
                'icone' => 'status'
            ],
            [
                'id' => 3,
                'name' => 'Shopee',
                'icone' => 'status'
            ],
        ];

        VendaTipo::insert($tipo);

    }
}
