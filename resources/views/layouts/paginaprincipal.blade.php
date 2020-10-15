<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div id="head" class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" id="nav1">
                        <a href="{{ url('/') }}"><p id="home">Chain Buys</p></a>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">

                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                        <img id="logo" src="{{ asset('img/logo.png') }}" width="150px">
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                    </div>
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                        @if (Route::has('login'))
                            @auth
                            <div id="nav1">
                                <a href="{{ url('/home') }}">Chain Buys</a>
                            </div>
                            @else
                                <div class="btn-group" id="nav">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('img/menu.png') }}" width="50px" alt="">
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('login') }}"><button class="dropdown-item" type="button">Iniciar Sesion</button></a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"><button class="dropdown-item" type="button">Registro</button></a>
                                        @endif
                                    </div>
                                </div>
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fuid">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" id="">
               <button id="factura">
                   Factura
               </button>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar Producto</button>
              </form>
        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <p  id="pie">
                <img src="{{ asset('img/logo.png') }}" width="100px"><br>
                © chain buys 2020
            </p>
        </div>
    </div>    
</body>
</html>
