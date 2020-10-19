@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10" id="conten">
            <div class="row">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <div class="row">
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <a href="{{ route('home') }}"><img src="{{ asset('img/atras.png') }}" width="30px"></a>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" id="centro">
                            <h2>Crear Factura</h2>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
                    </div>
                    <hr>
                    <form id="busque">
                        <input id="inbus" type="text"><button id="bobus" type="submit"><img src="{{ asset('img/122035861_344787693252458_4753061313108000069_n.png') }}" width="30px"></button>
                    </form>
                </div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <table id="tablas">
                        <h2>Facturas <a href="{{ route('pag/inicio') }}"><img src="{{ asset('img/22.png') }}" width="20px"></a></h2>
                        <tr>
                            <th>Id</th>
                            <th>Nit</th>
                            <th>Codigo</th>
                            <th>Usuario</th> 
                            <th>Cliente</th>
                            <th>Telefono</th>
                            <th>Fecha</th>
                            <th>Subtotal</th> 
                            <th>Total</th>
                        </tr>
                        <tbody>
                        @foreach($facturas as $factura)
                            
                        <tr>
                            <td id="in" id="in"><label id="inpu">{{ $factura->fac_id }}</label></td>
                            <td id="in"><label id="inpu">{{ $factura->fac_empresa }}</label></td>
                            <td id="in"><label id="inpu">{{ $factura->fac_codigo }}</label></td>
                            <td id="in"><label id="inpu">{{ $factura->fac_usuario }}</label></td>
                            <td id="in"><label id="inpu">{{ $factura->fac_cliente }}</label></td>
                            <td id="in"><label id="inpu">{{ $factura->fac_telefono }}</label></td>
                            <td id="in"><label id="inpu">{{ $factura->fac_fecha }}</label></td>
                            <td id="in"><label id="inpu">{{ $factura->fac_subtotal }}</label></td>
                            <td id="in"><label id="inpu">{{ $factura->fac_total }}</label></td>

                        </tr> 
                            
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <table id="tablas">
                        <h2>Productos</h2>
                        <tr>
                            <th>Codigo</th>
                            <th>descripcion</th>
                            <th>imagen</th>
                            <th>provedor</th>
                        </tr>
                        <tr>
                            @foreach($productos as $producto)

                            <td id="in"><label id="inpu">{{ $producto->pro_id }}</label></td>
                            <td id="in"><label id="inpu">{{ $producto->pro_descripcion }}</label></td>
                            <td id="in"><label id="inpu">{{ $producto->pro_imagen }}</label></td>
                            <td id="in"><label id="inpu">{{ $producto->pro_proveedor }}</label></td>

                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection