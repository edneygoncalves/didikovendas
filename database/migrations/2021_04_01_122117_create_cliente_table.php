<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nome_contato')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('messenger_face')->nullable();
            $table->string('foto')->nullable();
            $table->foreignId('cidade_id')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('cidade_id')
                ->references('id')
                ->on('cidade')
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
        Schema::dropIfExists('cliente');
    }
}
