<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
    <style>
        .margemTop
        {
            margin-top: 30px;
        }
    </style>
    </head>

    <body>
        <header>
            <h1>@yield('title')</h1>
            <nav>
                <ul>
                    <li> <a href="/pagina1"> Página 1</a></li>
                    <li> <a href="/pagina2" > Página 2</a></li>
                    <li> <a href="/pagina3" > Página 3</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section>
                <header>
                    <h2>@yield('sub-titulo')</h2>
                </header>

                @yield('conteudo')
            </section>
        </main>

        <script>
        </script>

        <footer class='margemTop'>
            <small>Footer</small>
        </footer>
    </body>
</html>
