<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaCor extends Migration
{
    public function up()
    {
        Schema::create('Cor', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Cor');
    }
}
