@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido!') }}

                    
                    <a href="{{ route('pag/inicio') }}">index</a><br>
                    <a href="{{ route('pag/facturas') }}">facturas</a><br>
                    <a href="{{ route('pag/perfil') }}">perfil</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
