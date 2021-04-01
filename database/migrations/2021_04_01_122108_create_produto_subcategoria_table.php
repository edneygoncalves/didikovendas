<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_subcategoria', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id');
            $table->string('name');
            $table->string('icone')->nullable();
            $table->timestamps();



            $table->foreign('categoria_id')
                ->references('id')
                ->on('produto_categoria')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_subcategoria');
    }
}
