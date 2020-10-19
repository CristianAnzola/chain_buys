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
                        <form action="{{ url('/pag') }}" method="POST"></form>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                </div>
            </div>
        </div>
@endsection