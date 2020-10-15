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
    </head>
    <body>
        <div class="container-fluid">
            <div id="head" class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight"><a href="{{ url('/') }}"><p id="home">Chain Buys</p></a></div>
                        <div class="p-2 bd-highlight"></div>
                        <div class="ml-auto p-2 bd-highlight">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}">Chain Buys</a>
                                @else
                                    <div class="btn-group">
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
                              <img src="{{ asset('img/Desarrollo-de-Productos-para-Retail1.jpg') }}" class="d-block w-100" alt="..." placeholder="imagen">
                            </div>
                            <div class="carousel-item">
                              <img src="{{ asset('img/2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                             <img src="{{ asset('img/3.jpg') }}" class="d-block w-100" alt="...">
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
                        <h4>
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <p  id="pie">© chain buys 2020</p>
                </div>
            </div>
        </div>
    </body>
</html>
