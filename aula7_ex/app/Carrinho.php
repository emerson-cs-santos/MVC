<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $fillable = [
        'id',
        'email',
        'fk_produto',
        'qtd',
        'fk_usuario'
];
    protected $table = 'Carrinho';

    public function Usuario()
    {
        return $this->belongsTo(User::class, 'fk_usuario');
    }

    public function Produto()
    {
        return $this->belongsTo(Produtos::class, 'fk_produto');
    }
}
