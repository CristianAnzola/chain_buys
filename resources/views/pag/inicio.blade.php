@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5"></div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" id="">
                        <button id="titulo">
                            Factura
                        </button>
                    </div>
                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <form action="{{ url('/pag') }}" method="POST">
                            {{ csrf_field() }}
                            <label for="id">{{ 'id' }}</label>
                        
                            <input type="text" id="fac_id" name="fac_id">
                            <br>
                            <br>
                            <label for="empresa">{{ 'empresa' }}</label>

                            <input type="text" id="fac_empresa" name="fac_empresa">
                            <br>
                            <br>
                            <label for="codigo">{{ 'codigo' }}</label>

                            <input type="text" id="fac_codigo" name="fac_codigo">
                            <br>
                            <br>
                            <label for="usuario">{{ 'usuario' }}</label>

                            <input type="text" id="fac_usuario" name="fac_usuario">
                            <br>
                            <br>
                            <label for="cliente">{{ 'cliente' }}</label>

                            <input type="text" id="fac_cliente" name="fac_cliente">
                            <br>
                            <br>
                            <label for="producto">{{ 'producto' }}</label>
                            
                            <input type="text" id="fac_producto" name="fac_producto">
                            <br>
                            <br>
                            <label for="telefono">{{ 'telefono' }}</label>
                            
                            <input type="text" id="fac_telefono" name="fac_telefono">
                            <br>
                            <br>
                            <label for="fecha">{{ 'fecha' }}</label>

                            <input type="date" id="fac_fecha" name="fac_fecha">
                            <br>
                            <br>
                            <label for="subtotal">{{ 'subtotal' }}</label>

                            <input type="text" id="fac_subtotal" name="fac_subtotal">
                            <br>
                            <br>
                            <label for="total">{{ 'total' }}</label>

                            <input type="text" id="fac_total" name="fac_total">
                            <br>
                            <br>
                            <input type="submit" value="agregar">
                            
                        </form>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                </div>
            </div>
        </div>
@endsection
