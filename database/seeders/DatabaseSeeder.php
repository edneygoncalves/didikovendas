<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriaSubCategoriaTableSeeder::class,
            CidadeTableSeeder::class,
            FornecedorTableSeeder::class,
            VendaTipoTableSeeder::class,
            VendaStatusTableSeeder::class,
            EncomendaStatusTableSeeder::class,
        ]);
    }
}
