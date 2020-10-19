@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="conten">
                        <div class="row">
                            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                <a href="{{ route('pag/facturas') }}"><img src="{{ asset('img/atras.png') }}" width="30px"></a>
                            </div>
                            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" id="centro">
                                <h2>Crear Factura</h2>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
                        </div>
                        <hr>
                        <form action="{{ url('/pag') }}" method="POST">
                            {{ csrf_field() }}
                            
                            <div class="row" id="dist">
                                <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                    <label id="impu1" for="id">{{ 'id' }}</label>
                                </div>
                                <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input id="impu" type="text" id="fac_id" name="fac_id">
                                </div>
                                <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                            </div>
                            
                            <div class="row" id="dist">
                                <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                    <label id="impu1" for="empresa">{{ 'empresa' }}</label>
                                </div>
                                <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input id="impu" type="text" id="fac_empresa" name="fac_empresa">
                                </div>
                                <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                            </div>
                            
                            <div class="row" id="dist">
                                <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                    <label id="impu1" for="codigo">{{ 'codigo' }}</label>
                                </div>
                                <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input id="impu" type="text" id="fac_codigo" name="fac_codigo">
                                </div>
                                <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                            </div>
                            
                            <div class="row" id="dist">
                                <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                    <label id="impu1" for="usuario">{{ 'usuario' }}</label>
                                </div>
                                <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input id="impu" type="text" id="fac_usuario" name="fac_usuario">
                                </div>
                                <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                            </div>
                            
                            <div class="row" id="dist">
                                <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                    <label id="impu1" for="cliente">{{ 'cliente' }}</label>
                                </div>
                                <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input id="impu" type="text" id="fac_cliente" name="fac_cliente">
                                </div>
                                <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                            </div>
                            
                            <div class="row" id="dist">
                                <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                    <label id="impu1" for="producto">{{ 'producto' }}</label>
                                </div>
                                <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input id="impu" type="text" id="fac_producto" name="fac_producto">
                                </div>
                                <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                            </div>
                                
                            <div class="row" id="dist">
                                <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                    <label id="impu1" for="telefono">{{ 'telefono' }}</label>
                                </div>
                                <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input id="impu" type="text" id="fac_telefono" name="fac_telefono">
                                </div>
                                <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                            </div>

                            <div class="row" id="dist">
                                <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                    <label id="impu1" for="fecha">{{ 'fecha' }}</label>
                                </div>
                                <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input id="impu" type="date" id="fac_fecha" name="fac_fecha">
                                </div>
                                <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                            </div>
                                
                            <div class="row" id="dist">
                                <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                    <label id="impu1" for="subtotal">{{ 'subtotal' }}</label>
                                </div>
                                <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input id="impu" type="text" id="fac_subtotal" name="fac_subtotal">
                                </div>
                                <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                            </div>
                                
                            <div class="row" id="dist">
                                <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                    <label id="impu1" for="total">{{ 'total' }}</label>
                                </div>
                                <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input id="impu" type="text" id="fac_total" name="fac_total">
                                </div>
                                <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
                            </div>

                            <div class="row" id="dist">
                                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
                                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <input type="submit" value="agregar" id="boton">
                                </div>
                                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                </div>
            </div>
        </div>
@endsection
