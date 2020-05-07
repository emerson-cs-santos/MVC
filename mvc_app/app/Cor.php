<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Cor extends Model
{
    use HasRoles;

    protected $fillable = [ 'id',  'nome'  ];

    protected $table = 'Cor';
}
