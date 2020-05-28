<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cor;
use DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;

class CoresController extends Controller
{
    public function __construct()
    {
        //Documentação do Spatie Permission - https://docs.spatie.be/laravel-permission/v3/introduction/

        $this->middleware( 'permission:cor-list', ['only' => ['index','show']] );

        $this->middleware( 'permission:cor-create', ['only' => ['create','store']] );

        $this->middleware( 'permission:cor-edit', ['only' => ['edit','update']] );

        $this->middleware('permission:cor-delete', ['only' => ['destroy']] );
    }

    public function index( Request $request  )
    {
        $data = Cor::orderBy( 'id', 'DESC')->paginate(5);

        return view( 'Cores.index', compact( 'data'))->with( 'i', ( $request->input( 'page', 1) - 1) * 5);
    }

    public function indexAPI()
    {
        return Cor::all();
    }


    public function create()
    {
       return view( 'cores.create');
    }


    public function store(Request $request)
    {
        $this->validate( $request, [
            'nome'      => 'required'
            ]);

            $input = $request->all();

            $cor = Cor::create($input);

            return redirect()->route( 'cores.index')->with( 'success', 'Cor criada com sucesso');
    }

    public function storeAPI(Request $request)
    {
        $json = $request->getContent();

        // receber o html (precisa ser um json válido) converter para o php em array
        return Cor::create( json_decode( $json, JSON_OBJECT_AS_ARRAY ) );
    }


    public function show($id)
    {
    	$cor = Cor::find( $id);

    	return view( 'cores.show', compact( 'cor'));
    }


    public function showAPI($id)
    {
        $cor = Cor::find($id);

        if ( $cor )
        {
            // Find acima já retorna como json
            return $cor;
        }
        else
        {
            return json_encode( [ $id => 'nao existe' ] );
        }
    }


    public function edit($id)
    {
    	$cor = Cor::find( $id );
        return view( 'cores.edit', compact( 'cor'));
    }


    public function update(Request $request, $id)
    {
    	$this->validate($request,   [
            'nome'      => 'required'
                ]);

        $cor = Cor::find($id);

        $input = $request->all();

        $cor->update($input);

        return redirect()->route('cores.index')->with('success','Cor atualizada com sucesso');
    }


    public function updateAPI(Request $request, $id)
    {
        $cor = Cor::find($id);

        if ( $cor )
        {
            $json = $request->getContent();
            $atualizacao    = json_decode( $json, JSON_OBJECT_AS_ARRAY );
            $cor->nome = $atualizacao['nome'];
            $ret = $cor->update() ? [ $id => 'atualizado' ] : [ $id =>'erro' ];
        }
        else
        {
            $ret = [$id => 'nao existe'];
        }

        return json_encode($ret);
    }



    public function destroy($id)
    {
    	Cor::find($id)->delete();

    	return redirect()->route('cores.index')->with('success','Cor removida com sucesso');
    }

    public function destroyAPI($id)
    {
        $cor = Cor::find($id);

        if ( $cor )
        {
            $ret = $cor->delete() ? [$id=> 'apagado'] : [$id => 'erro'];
        }
        else
        {
            $ret = [$id => 'Nao existe'];
        }
        return json_encode($ret);
    }
}
