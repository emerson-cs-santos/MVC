@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="table-responsive mt-3">
            <table class="table table-striped bg-light text-center table-bordered">

                <thead class="text-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->endereco}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
