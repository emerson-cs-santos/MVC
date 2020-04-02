<html>
	<head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Uma bela barra superior (use a imagica&ccedil;&atilde;o) <br>
            ----------------------------------------------------------
            @show
            <div class="container">
                @yield('content')
            </div>
	</body>
</html>
