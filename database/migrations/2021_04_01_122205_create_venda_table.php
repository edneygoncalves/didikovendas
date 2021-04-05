<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_id');
            $table->foreignId('tipo_id');
            $table->foreignId('cliente_id');
            $table->foreignId('viagem_id')->nullable();
            $table->string('name')->nullable();
            $table->string('registro')->nullable();
            $table->string('maps')->nullable();
            $table->string('lote')->nullable()->default('#00000000000');
            $table->timestamp('previsao_entrega')->nullable();
            $table->timestamp('entregue_em')->nullable();
            $table->timestamp('pago_em')->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('status_id')
                ->references('id')
                ->on('venda_status')
                ->onDelete('cascade');

            $table->foreign('tipo_id')
                ->references('id')
                ->on('venda_tipo')
                ->onDelete('cascade');

            $table->foreign('cliente_id')
                ->references('id')
                ->on('cliente')
                ->onDelete('cascade');


            $table->foreign('viagem_id')
                ->references('id')
                ->on('viagem')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venda');
    }
}
