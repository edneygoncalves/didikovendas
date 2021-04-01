<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncomendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomenda', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id');
            $table->foreignId('fornecedor_id')->nullable();
            $table->foreignId('venda_id')->nullable();
            $table->decimal('custo', 10, 2)->nullable();
            $table->decimal('venda', 10, 2)->nullable();
            $table->foreignId('status_id');
            $table->string('name')->nullable();
            $table->string('registro')->nullable();
            $table->string('lote')->nullable()->default('#00000000000');
            $table->timestamp('retirado_em')->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('produto_id')
                ->references('id')
                ->on('produto')
                ->onDelete('cascade');

            $table->foreign('fornecedor_id')
                ->references('id')
                ->on('fornecedor')
                ->onDelete('cascade');

            $table->foreign('venda_id')
                ->references('id')
                ->on('venda')
                ->onDelete('cascade');

            $table->foreign('status_id')
                ->references('id')
                ->on('encomenda_status')
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
        Schema::dropIfExists('encomenda');
    }
}
