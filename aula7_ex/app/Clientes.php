<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'endereco',
        'telefone',
        'fk_usuario'

];
    protected $table = 'Clientes';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'fk_usuario');
    }

    public function vendas(){

        return $this->hasMany(Vendas::class, 'fk_cliente');
    }

    public function Vendas_cliente()
    {
        return $this->hasManyThrough(
            VendaItem::class,
            Vendas::class,
            'fk_cliente',
            'fk_produto',
            'id',
            'id'
        );
    }

}
