<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="{{ asset('img/icon/logo.svg') }}" alt="" class="navbar-brand">

                <form class="d-flex">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- teste-->
                        <ul class="nav justify-content-end">
                            <li class="nav-item font-hover font">
                                <a class="nav-link font" aria-current="page" href="{{route('site.home')}}">Home</a>
                            </li>
                            <li class="nav-item font-hover font">
                                <a class="nav-link font" href="{{route('site.products')}}">Produtos</a>
                            </li>
                            <li class="nav-item font-hover font">
                                <a class="nav-link font" href="{{route('site.contact')}}" tabindex="-1">Contato</a>
                            </li>
                            <li class="nav-item font-hover font">
                                <a class="nav-link font" href="{{route('site.blog')}}" tabindex="-1">Blog</a>
                            </li>
                        </ul>
                        <!-- teste-->
                        <!-- 
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item font-hover ">
                                <a class="nav-link font active" aria-current="page" href="{{route('site.home')}}">Pagina Inicial</a>
                            </li>
                            <li class="nav-item font-hover">
                                <a class="nav-link font" href="{{route('site.products')}}" tabindex="-1">Produtos</a>
                            </li>
                            <li class="nav-item font-hover">
                                <a class="nav-link font" href="{{route('site.about')}}" tabindex="1">Sobre</a>
                            </li>
                            <li class="nav-item font-hover">
                                <a class="nav-link font" href="{{route('site.contact')}}" tabindex="1">Contato</a>
                            </li>
                            <li class="nav-item font-hover">
                                <a class="nav-link font" href="{{route('site.blog')}}" tabindex="1">Blog</a>
                            </li>
                        </ul>
                        teste-->
                </form>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="main_footer">
        <div class="dots_pattern"></div>
        <div class="main-wrapper flex-container">
            <div class="quality-badge">
                <p>Cur omnia mori? </p>
                <p>Ubi est barbatus zelus? </p>
            </div>
            <ul>
                <li class="footer__links">
                    <h4 class="title-small">Redes Sociais</h4>
                    <a href="{{route('site.blog')}}">Blog</a>
                    <a href=" https://www.facebook.com/beerandcodeoficial/" target="_blank">Facebook</a>
                    <a href="https://www.youtube.com/c/BeerAndCode?sub_confirmation=1" target="_blank">YouTube</a>
                </li>
                <li class="footer__links">
                    <h4 class="title-small">Empresa</h4>
                    <a href="{{route('site.products')}}">Nossos produtos</a>
                    <a href="{{route('site.about')}}">Sobre nós</a>
                    <a href="{{route('site.contact')}}">Entre em contato</a>
                </li>
                <li class="footer__links">
                    <h4 class="title-small">Contatos</h4>
                    <a title="Clique no número do telefone para ligar" href="tel:16999999999">Telefone</a>
                    <a title="Clique no email para enviar email automatico" href="mailto:contato@beerandcode.com
                .br">Email</a>
                </li>
            </ul>
        </div>
    </footer>
    <section class="sub__footer">
        <div class="main-wrapper flex-container">
            <a href="#"><img src="{{asset('img/icon/Lock-icon.svg')}}">CMS</a>
            <p>Hercle, bursa bassus!. Cum lacta congregabo, omnes tataes captis velox, teres abactuses. </p>
            <a href="http://mmpx.com.br/" target="_blank">Deisgn by <strong>MMPX</strong></a>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>