<?php

namespace Database\Seeders;

use App\Models\VendaStatus;
use Illuminate\Database\Seeder;

class VendaStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $status = [
            [
                'id' => 1,
                'name' => 'Negociando',
                'icone' => 'status'
            ],
            [
                'id' => 2,
                'name' => 'Encomendado',
                'icone' => 'status'
            ],
            [
                'id' => 3,
                'name' => 'Disponível',
                'icone' => 'status'
            ],
            [
                'id' => 4,
                'name' => 'Entregue',
                'icone' => 'status'
            ],
            [
                'id' => 5,
                'name' => 'Devolução',
                'icone' => 'status'
            ],
        ];

        VendaStatus::insert($status);
    }
}
