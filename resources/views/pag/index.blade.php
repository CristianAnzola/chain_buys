@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5"></div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" id="">
                        <button id="factura">
                            Factura
                        </button>
                    </div>
                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <form id="busque" class="form-inline my-2 my-lg-0">
                            <input id="inbus" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar Producto</button>
                        </form>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                </div>
            </div>
        </div>
@endsection
