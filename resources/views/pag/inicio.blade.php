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
                        <form id="busque">
                            <input type="text" id="id" placeholder="id">
                            <br>
                            <input type="text" id="empresa" placeholder="empresa">
                            <br>
                            <input type="text" id="codigo" placeholder="codigofactura">
                            <br>
                            <input type="text" id="usuario" placeholder="Usuario">
                            <br>
                            <input type="text" id="cliente" placeholder="cliente">
                            <br>
                            <input type="text" id="producto" placeholder="producto">
                            <br>
                            <input type="text" id="telefono" placeholder="telefono">
                            <br>
                            <input type="date" id="fecha" placeholder="fecha">
                            <br>
                            <input type="text" id="subtotal" placeholder="subtotal">
                            <br>
                            <input type="text" id="total" placeholder="total">
                            <br>
                            <button class="btn btn-form" id="ingresar">Ingresar</button>
                        </form>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                </div>
            </div>
        </div>
@endsection
