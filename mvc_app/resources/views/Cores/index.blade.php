@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cores</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('cores.create') }}"> + Nova Cor</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))

<div class="alert alert-success mt-4">
  <p>{{ $message }}</p>
</div>

@endif


<table class="table table-bordered mt-2">

 <tr>
   <th>ID</th>
   <th>Nome</th>
   <th width="280px">Ação</th>
 </tr>

 @foreach ($data as $key => $cor)

  <tr>
    <td>{{ $cor->id}}</td>
    <td>{{ $cor->nome }}</td>
    {{-- <td>

      @if(!empty($user->getRoleNames()))

        @foreach($user->getRoleNames() as $v)

           <label class="badge badge-success">{{ $v }}</label>

        @endforeach

      @endif

    </td> --}}

    <td>
       <a class="btn btn-info" href="{{ route('cores.show',$cor->id) }}">Mostrar</a>
       <a class="btn btn-primary" href="{{ route('cores.edit',$cor->id) }}">Editar</a>

        {!! Form::open(['method' => 'DELETE','route' => ['cores.destroy', $cor->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}

    </td>
  </tr>

 @endforeach

</table>

{!! $data->render() !!}

@endsection
