<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    // Define Colunas
    protected $fillable = [ 'id', 'nome','sobrenome' ];

    // Define Tabela
    protected $table = 'Clientes';
}
