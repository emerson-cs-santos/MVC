<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'img'
];
    protected $table = 'Categorias';

}