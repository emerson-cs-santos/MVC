<!doctype html>
<html lang="pt-br">
    <head>
        <title>Admin - Gamer Shopping</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src="https://kit.fontawesome.com/c0fc838bea.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="admin_assets/css/admin.css">
    </head>

    <body>
        <header>
            <!---Nav bar-->
            <nav class="navbar navbar-expand-md navbar-light">
                <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#navbar"> <span class="navbar-toggler-icon"></span> </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <div class="container-fluid">
                        <div class="row">
                            <!---Sidebar-->
                            <div class=" col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">

                                <a href="#" class="navbar-brand text-white d-block  mx-auto text-center py-3 mb-4"><i class="fas fa-cannabis text-light fa-3x"></i></a>

                                <div class="bottom-border pb-3">
                                    <img src="admin_assets/images/john.png" alt="Imagem do perfil" width="50" class="rounded-circle mr-3">
                                    <a href="#" class="text-white ">Nome usuario</a>
                                </div>

                                <ul class="navbar-nav flex-column mt-4">
                                    <li class="nav-item"><a href="/admin" class="nav-link text-white p-3 mb-2 sidebar-link {{ \Request::is('admin') ? ' current' : '' }} "> <i class="fas fa-home text-light fa-lg mr-3"></i> Home</a></li>

                                    <li class="nav-item"><a href="/usuario" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i> Profile</a></li>

                                    <li class="nav-item"><a href="/categoria" class="nav-link text-white p-3 mb-2 sidebar-link {{ \Request::is('categoria') ? ' current' : '' }}"  ><i class="fa fa-cubes text-light fa-lg mr-3"></i> Categorias</a></li>

                                    <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i> Sales</a></li>

                                    <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i> Settings</a></li>
                                </ul>
                            </div>
                            <!---end of side bar-->
                            <!---Top Nav-->

                            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto top-bar fixed-top py-2 top-nav">
                                <div class="row align-item-center">

                                    <div class="col-md-4">
                                        <h1 class="text-light text-uppercase mb-0 h4">Gamer Shopping</h1>
                                    </div>

                                    <div class="col-md-5">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control search-input" placeholder="search">
                                                <button type="button" class="btn btn-white search-button">
                                                    <i class="fas fa-search text-dark"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-3">
                                        <ul class="navbar-nav">
                                            <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"> <i class="fas fa-comments text-light fa-lg"></i></a>
                                            <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-bell text-light fa-lg"></i></a>
                                            <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"> <i class="fas fa-sign-out-alt text-danger fa-lg"></i></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End of Top Nav-->
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!--End of Navbar-->

      <main>
        @yield('content_Admin')
      </main>

        <!---Modal-->
        <div class="modal" id="sign-out">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title">Signout</span>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        press the button
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal"> Leave </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel </button>
                    </div>
                </div>
            </div>
        </div>
        <!---End of Modal-->

        <footer class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto mt-3 bd-bottom">
                    <div class="row border-top pt-3">
                    </div>
                    <div class="col-lg-6 text-center text-success">
                        <p>&copy; Copyright. Senac 2020 - Sistemas para Internet - Projeto integrador 3</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>