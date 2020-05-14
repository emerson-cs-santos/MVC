@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="container mt-5 " >
                <div class="card">
                    <div class="card-header">Menu Inicial</div>
                    <div class="row text-center ">
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/clientes/listar">Clientes</a></li>
                                <li class="list-group-item"><a href="/listarVendedoresOLD">Vendedores_OLD</a></li>
                                <li class="list-group-item"><a href="{{ route('users.index') }}">Usuários</a></li>
                                <li class="list-group-item"><a href="{{ route('roles.index') }}">Roles/Papéis</a></li>
                                <li class="list-group-item"><a href="{{ route('cores.index') }}">Cores</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
