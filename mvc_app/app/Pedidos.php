<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    // Define Colunas
    protected $fillable = [ 'id', 'numero','valor' ];

    // Define Tabela
    protected $table = 'Pedidos';
}
