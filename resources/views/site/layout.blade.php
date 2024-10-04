<!doctype html>
<html lang="pt-br">
    <head>
        <title>Ecommerce</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand px-4" href="{{route('site.index')}}"><img src="{{asset('img/logoo.png')}}" width="50" height="50" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-sm-none p-3 d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary text-white" type="submit">Search</button>
                    </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('site.index')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Filtrar </a>
                        <ul class="dropdown-menu">
                            @foreach ($categoriasMenu as $categoriaM)
                                <li><a class="dropdown-item" href="{{route('site.categoria',$categoriaM->id)}}">{{$categoriaM->nome}}</a></li>
                            @endforeach
                        </ul>       
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active text-white" href="{{route('site.carrinho')}}">Carrinho</a>
                    </li>
                </ul>
                    
                <form class="d-none d-sm-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary text-white" type="submit">Search</button>
                </form>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end pe-4">
                        <li class="nav-item">
                            <a class="btn btn-outline-primary nav-link active text-light p-md-3 ms-md-3" href="{{route('login.form')}}">Login <i class="bi bi-box-arrow-in-right"></i></a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
       
        @yield('conteudo')

        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
