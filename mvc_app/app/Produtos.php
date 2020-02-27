<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    // Define Colunas
    protected $fillable = [ 'id', 'nome','descricao' ,'preco' ];

    // Define Tabela
    protected $table = 'Produtos';
}
