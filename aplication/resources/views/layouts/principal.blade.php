<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="{{ asset('img/logo.svg') }}" alt="" class="navbar-brand">

                <form class="d-flex">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item font-hover ">
                                <a class="nav-link font active" aria-current="page" href="{{route('site.home')}}">Pagina Inicial</a>
                            </li>
                            <li class="nav-item font-hover">
                                <a class="nav-link font" href="{{route('site.products')}}" tabindex="-1">Produtos</a>
                            </li>
                            <li class="nav-item font-hover">
                                <a class="nav-link font" href="{{route('site.blog')}}" tabindex="1">Blog</a>
                            </li>
                            <li class="nav-item font-hover">
                                <a class="nav-link font" href="{{route('site.about')}}" tabindex="1">Sobre</a>
                            </li>
                            <li class="nav-item font-hover">
                                <a class="nav-link font" href="{{route('site.contact')}}" tabindex="1">Contato</a>
                            </li>
                        </ul>
                </form>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="bg-dark footer-s">
        <h5 class="text-light align-h5">Copyright © 2020 Logo Ipsom | Todos os direitos reservados.</h5>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>