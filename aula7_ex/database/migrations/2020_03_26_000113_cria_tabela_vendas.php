<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vendas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nr_pedido');
            $table->bigInteger('fk_cliente')->unsigned();
            $table->foreign('fk_cliente')->references('id')->on('Clientes')->onDelete('cascade');
            $table->date('dt_venda');
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
        Schema::dropIfExists('Vendas');
    }
}
