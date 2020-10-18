@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" ></div>
        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8" id="conten">
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
                            <th>Codigo</th>
                            <th>cliente</th>
                            <th>fecha</th>
                            <th>valor</th>
                        </tr>
                        <tr>
                            <td><label id="inpu"></label></td>
                            <td><label id="inpu"></label></td>
                            <td><label id="inpu"></label></td>
                            <td><label id="inpu"></label></td>
                        </tr>
                    </table>
                </div>
                <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <table id="tablas">
                        <h2>Productos</h2>
                        <tr>
                            <th>Codigo</th>
                            <th>nombre</th>
                            <th>imagen</th>
                            <th>precio</th>
                        </tr>
                        <tr>
                            <td><label id="inpu"></label></td>
                            <td><label id="inpu"></label></td>
                            <td><label id="inpu"></label></td>
                            <td><label id="inpu"></label></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" ></div>
    </div>
@endsection