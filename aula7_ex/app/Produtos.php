<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'desc',
        'fk_categoria',
        'img',
        'preco',
        'desconto',
        'ativo',

];
    protected $table = 'Produtos';

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'fk_categoria');
    }

    public function Vendas()
    {
        return $this->hasMany(VendaItem::class, 'fk_produto');
    }

    public function Carrinho()
    {
        return $this->hasMany(Carrinho::class, 'fk_produto');
    }
}
