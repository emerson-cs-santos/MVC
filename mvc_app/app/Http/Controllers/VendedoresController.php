<?php

namespace App\Http\Controllers;
use App\Vendedores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar()
    {
        $vendedores = Vendedores::all();

        return view('vendedores.listar', ['vendedores' => $vendedores] );
    }
}
