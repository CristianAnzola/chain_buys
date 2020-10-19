@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10" id="conten">
            <a href="{{ route('pag/inicio') }}"><button id="boto"><h4>Facturas</h4></button></a>
            <div class="row">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <form id="busque">
                        <input id="inbus" type="text"><button id="bobus" type="submit"><img src="{{ asset('img/122035861_344787693252458_4753061313108000069_n.png') }}" width="30px"></button>
                    </form>
                </div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            </div>
            <div class="row">
                <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                    <table id="tablas">
                        <h2>Facturas</h2>
                        <tr>
                            <th>Id</th>
                            <th>Empresa</th>
                            <th>Codigo</th>
                            <th>Usuario</th> 
                            <th>Cliente</th>
                            <th>Producto</th>
                            <th>Telefono</th>
                            <th>Fecha</th>
                            <th>Subtotal</th> 
                            <th>Total</th>
                        </tr>
                        <tbody>
                        @foreach($facturas as $factura)
                            
                        <tr>
                            <td><label id="inpu">{{ $factura->fac_id }}</label></td>
                            <td><label id="inpu">{{ $factura->fac_empresa }}</label></td>
                            <td><label id="inpu">{{ $factura->fac_codigo }}</label></td>
                            <td><label id="inpu">{{ $factura->fac_usuario }}</label></td>
                            <td><label id="inpu">{{ $factura->fac_cliente }}</label></td>
                            <td><label id="inpu">{{ $factura->fac_producto }}</label></td>
                            <td><label id="inpu">{{ $factura->fac_telefono }}</label></td>
                            <td><label id="inpu">{{ $factura->fac_fecha }}</label></td>
                            <td><label id="inpu">{{ $factura->fac_subtotal }}</label></td>
                            <td><label id="inpu">{{ $factura->fac_total }}</label></td>

                        </tr> 
                            
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
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

                            <td><label id="inpu">{{ $producto->pro_id }}</label></td>
                            <td><label id="inpu">{{ $producto->pro_descripcion }}</label></td>
                            <td><label id="inpu">{{ $producto->pro_imagen }}</label></td>
                            <td><label id="inpu">{{ $producto->pro_proveedor }}</label></td>

                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection