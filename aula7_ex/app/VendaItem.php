<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendaItem extends Model
{
    protected $fillable = [
        'id',
        'fk_venda',
        'fk_produto',
        'qtd_venda'
];
    protected $table = 'VendaItem';
}
