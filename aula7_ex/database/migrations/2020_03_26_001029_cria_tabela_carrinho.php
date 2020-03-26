<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaCarrinho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Carrinho', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->bigInteger('fk_produto')->unsigned();
            $table->foreign('fk_produto')->references('id')->on('Produtos');
            $table->bigInteger('qtd')->unsigned();
            $table->bigInteger('fk_usuario')->unsigned();
            $table->foreign('fk_usuario')->references('id')->on('Users');
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
        Schema::dropIfExists('Carrinho');
    }
}
