<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    // Define Colunas
    protected $fillable = [ 'id', 'nome' ];

    // Define Tabela
    protected $table = 'Categorias';
}
