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


    public function show($id)
    {
    	$cor = Cor::find( $id);

    	return view( 'cores.show', compact( 'cor'));
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

    public function destroy($id)
    {
    	Cor::find($id)->delete();

    	return redirect()->route('cores.index')->with('success','Cor removida com sucesso');
    }
}
