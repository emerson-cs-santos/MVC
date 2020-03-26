<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'id',
        'nr_pedido',
        'fk_cliente',
        'dt_venda'
];
    protected $table = 'Vendas';

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'fk_cliente');
    }

    public function VendaProdutos(){

        return $this->hasMany( VendaItem::class, 'fk_venda');
    }

}
