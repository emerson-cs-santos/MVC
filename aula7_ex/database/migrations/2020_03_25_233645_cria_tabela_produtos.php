<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('desc');
            $table->bigInteger('fk_categoria')->unsigned();
            $table->foreign('fk_categoria')->references('id')->on('Categorias')->onDelete('cascade');
            $table->string('img');
            $table->double('preco', 10, 2);
            $table->double('desconto', 10, 2);
            $table->boolean('ativo');
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
        Schema::dropIfExists('Produtos');
    }
}
