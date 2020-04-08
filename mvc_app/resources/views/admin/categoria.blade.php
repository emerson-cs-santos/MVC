@extends('layouts.Admin')

@section('content_Admin')

    <!--tables-->
    <section class='mt-5'>

        <header class="container-fluid">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto row align-items-center">
                <h2>Categorias</h2>
            </div>
        </header>

        <div class="container-fluid mt-5">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center">

                        <!---Table BEGIN-->
                        <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                            <h3 class="text-dark text-center mb-3"> Cadastro </h3>
                            <table class="table table-striped bg-light text-center">
                                <thead>
                                    <tr class="text-dark">
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($campos as $campo)
                                        <tr>
                                            <td>{{$campo['id']}}</td>
                                            <td>{{$campo['nome']}}</td>
                                            <td><button type="button" class="btn btn-danger btn-sm">Excluir</button></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            <!---Pagination-->
                            <nav class="color">
                                <ul class="pagination justify-content-center">

                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>

                                    @for ($i = 1; $i <= 5; $i++)
                                        <li class="page-item {{ $i == 1 ? ' active' : '' }} ">
                                            <a href="#" class="page-link py-2 px-3">
                                                {{ $i }}
                                            </a>
                                        </li>
                                    @endfor

                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!---End of Pagination-->


                        </div>
                        <!---Table END-->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--End of table-->
@endsection






