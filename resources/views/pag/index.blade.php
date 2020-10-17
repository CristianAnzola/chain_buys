@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" id="">
               <button id="factura">
                   Factura
               </button>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar Producto</button>
            </form>
        </div>
@endsection
