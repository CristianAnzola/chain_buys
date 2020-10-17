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
                <div class="row">
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar Producto</button>
                        </form>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                </div>
            </div>
        </div>
@endsection
