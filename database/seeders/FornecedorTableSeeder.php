<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Seeder;

class FornecedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fornecedor = new Fornecedor([
            'id' => '1',
            'name' => 'Decore Studio',
            'responsavel' => 'Felipe Zóio',
            'nome_contato' => 'cdm-Decore Studio',
            'whatsapp' => '+55 35 8425-0619',
            'foto' => 'decore.jpg'

        ]);

        $fornecedor->save();
    }
}
