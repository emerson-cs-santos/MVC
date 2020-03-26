<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaMovimentacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movimentacao', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fk_produto')->unsigned();
            $table->foreign('fk_produto')->references('id')->on('Produtos');
            $table->bigInteger('qtd_movimento')->unsigned();
            $table->string('tipo_movimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Movimentacao');
    }
}
