<?php

namespace App\Http\Controllers;
use App\Vendedores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    public function index()
    {
        return Vendedores::all();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $json = $request->getContent();

        // receber o html (precisa ser um json válido) converter para o php em array
        return Vendedores::create( json_decode( $json, JSON_OBJECT_AS_ARRAY ) );
    }

    public function show($id)
    {
        $vendedor = Vendedores::find($id);

        if ( $vendedor )
        {
            // Find acima já retorna como json
            return $vendedor;
        }
        else
        {
            return json_encode( [ $id => 'nao existe' ] );
        }
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $vendedor = Vendedores::find($id);

        if ( $vendedor )
        {
            $json = $request->getContent();
            $atualizacao    = json_decode( $json, JSON_OBJECT_AS_ARRAY );
            $vendedor->nome = $atualizacao['nome'];
            $ret = $vendedor->update() ? [ $id => 'atualizado' ] : [ $id =>'erro' ];
        }
        else
        {
            $ret = [$id => 'nao existe'];
        }

        return json_encode($ret);
    }


    public function destroy($id)
    {
        $vendedor = Vendedores::find($id);

        if ( $vendedor )
        {
            $ret = $vendedor->delete() ? [$id=> 'apagado'] : [$id => 'erro'];
        }
        else
        {
            $ret = [$id => 'Nao existe'];
        }
        return json_encode($ret);
    }

    public function checkVendedor(int $idVendedor): bool
    {
        $vendedores = [
            1 => 'Marcos',
            2 => 'Amanda',
            3 => 'Lucas',
            4 => 'Regina'];

            return array_key_exists( $idVendedor, $vendedores );
    }

    // Essa interrogação antes do tipo do retorno, significa que ele também aceita null, alem do tipo declarado como retorno
    public function getVendedor(int $idVendedor): ?string
    {
        $vendedores = [
            1 => 'Marcos',
            2 => 'Amanda',
            3 => 'Lucas',
            4 => 'Regina'];

        // ?? null com isso se não achar o indice, retorna null, assim não precisando usar ISet.
        return $vendedores[$idVendedor] ?? null;
    }

    public function getJSON(): string
    {
        return json_encode( ['nome' => 'luiz'] );
       // return 'teste';
    }


    public function getTextoErros(): string
    {
       return '';
    }

    public function getTexto(): string
    {
       return 'Texto maravilhoso';
    }

    public function getString(): string
    {
       return 'Teste';
    }
}
