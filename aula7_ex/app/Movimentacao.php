<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    protected $fillable = [
        'id',
        'fk_produto',
        'qtd_movimento',
        'tipo_movimento'
];
    protected $table = 'Movimentacao';

    public function Produto()
    {
        return $this->belongsTo(Produtos::class, 'fk_produto');
    }
}
