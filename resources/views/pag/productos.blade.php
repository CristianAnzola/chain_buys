@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10" id="conten">
            <div class="row">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/atras.png') }}" width="30px"></a>
                </div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" id="centro">
                    <h2>Productos</h2>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table id="tablas">
                        <h2>Productos</h2>
                        <tr>
                            <th>Codigo</th>
                            <th>descripcion</th>
                            <th>descripcion</th>
                            <th>descripcion</th>
                            <th>descripcion</th>
                            <th>imagen</th>
                            <th>provedor</th>
                        </tr>
                        <tr>
                            @foreach($datoss as $producto)

                            <td id="in"><label id="inpu">{{ $producto->pro_id }}</label></td>
                            <td id="in"><label id="inpu">{{ $producto->prp_stock }}</label></td>
                            <td id="in"><label id="inpu">{{ $producto->prp_cantidad }}</label></td>
                            <td id="in"><label id="inpu">{{ $producto->prp_costo }}</label></td>
                            <td id="in"><label id="inpu">{{ $producto->pro_descripcion }}</label></td>
                            <td id="in"><label id="inpu">{{ $producto->pro_imagen }}</label></td>
                            <td id="in"><label id="inpu">{{ $producto->pro_proveedor }}</label></td>

                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <form action="{{ url('/pag') }}" method="POST">
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
    
@endsection