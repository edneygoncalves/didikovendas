<?php

namespace Database\Seeders;

use App\Models\EncomendaStatus;
use Illuminate\Database\Seeder;

class EncomendaStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $status = [
            [
                'id' => 1,
                'name' => 'Encomendado',
                'icone' => 'status'
            ],
            [
                'id' => 2,
                'name' => 'Pronto',
                'icone' => 'status'
            ],
            [
                'id' => 3,
                'name' => 'Pago',
                'icone' => 'status'
            ],
            [
                'id' => 4,
                'name' => 'Em Mãos',
                'icone' => 'status'
            ],
            [
                'id' => 5,
                'name' => 'Troca',
                'icone' => 'status'
            ],
        ];

        EncomendaStatus::insert($status);
    }
}
