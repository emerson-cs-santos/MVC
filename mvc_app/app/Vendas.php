<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'id'
        ,'cliente_id'
        ,'data_da_venda'
        ,'vendedor_id'
    ];

    protected $table = 'Vendas';

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function notaFiscal()
    {
        return $this->hasOne( NotasFiscais::class, 'venda_id');
    }

    public function produtosVenda()
    {

        return $this->hasMany( ProdutosVenda::class, 'venda_id');
    }

}
