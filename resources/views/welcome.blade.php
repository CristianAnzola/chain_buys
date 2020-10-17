<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="icon" type="{{ asset('img/') }}" href="img/logo.png">
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
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div id="carrusel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="{{ asset('img/Desarrollo-de-Productos-para-Retail1.jpg') }}" class="d-block w-100" alt="..." >
                            </div>
                            <div class="carousel-item">
                              <img src="{{ asset('img/selling-products-online.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                             <img src="{{ asset('img/woman-wearing-face-mask-in-supermarket.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="cont">
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div id="tex">
                        <h1>Bienvenidos</h1><br>
                        <a href="{{ route('pag/index') }}">index</a>
                        <a href="{{ route('pag/facturas') }}">facturas</a>
                        <h4 id="texto">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,<br> 
                            possimus magni veniam culpa vitae nesciunt nostrum accusantium at natus<br>
                            corporis voluptatem optio in! Provident minus, corporis alias blanditiis<br>
                             velit explicabo!
                        </h4>
                    </div>
                </div>
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    
                </div>
            </div>
            <div class="row" id="footer">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <p  id="pie">
                        <img src="{{ asset('img/logo.png') }}" width="100px"><br>
                        © chain buys 2020
                    </p>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    
                </div>
            </div>
        </div>
    </body>
</html>
