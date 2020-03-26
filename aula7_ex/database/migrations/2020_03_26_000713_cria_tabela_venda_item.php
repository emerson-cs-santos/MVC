<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaVendaItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VendaItem', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fk_venda')->unsigned();
            $table->foreign('fk_venda')->references('id')->on('Vendas')->onDelete('cascade');
            $table->bigInteger('fk_produto')->unsigned();
            $table->foreign('fk_produto')->references('id')->on('Produtos');
            $table->bigInteger('qtd_venda')->unsigned();
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
        Schema::dropIfExists('VendaItem');
    }
}
