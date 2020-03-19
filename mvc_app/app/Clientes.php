<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
        protected $fillable = [
            'id'
            ,'nome'
            ,'endereco'
            ,'email'
            ,'telefone'
        ];

        protected $table = 'Clientes';


    public function vendas()
    {
        return $this->hasMany(Vendas::class, 'cliente_id');
    }

    public function produtos_vendidos()
    {
        return $this->hasManyThrough(
            ProdutosVenda::class,
            Vendas::class,
            'cliente_id',
            'produto_id',
            'id',
            'id'
        );
    }

    public function cliente_vendedor()
    {
        return $this->hasManyThrough('App\Vendedores', 'App\Vendas');
    }


}
