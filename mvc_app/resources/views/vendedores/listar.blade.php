@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="table-responsive mt-3">
            <table class="table table-striped bg-light text-center table-bordered">

                <thead class="text-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($vendedores as $vendedor)
                        <tr>
                            <td>{{$vendedor->id}}</td>
                            <td>{{$vendedor->nome}}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </section>
@endsection
