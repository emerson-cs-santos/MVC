<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Clientes</title>
    </head>
    <body>

        <header class='text-center'>
            <h1>Clientes</h1>
        </header>

        <main>
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
        </main>

        <footer class="text-center">
            Footer
        </footer>
    </body>
</html>
