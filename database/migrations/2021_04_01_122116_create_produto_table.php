<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subcategoria_id');
            $table->string('name');
            $table->decimal('valor', 10, 2);
            $table->string('descricao');
            $table->string('foto');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('subcategoria_id')
                ->references('id')
                ->on('produto_subcategoria')
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
        Schema::dropIfExists('produto');
    }
}
