@extends('adminlte::page')

@section('title', 'Turismo')

@section('content_header')
    <h1>Vista usuario </h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        Bienvenido {{ Auth::user()->name }} te haz conectado con exito
                      </div>
                </div>
            </div>
        </div>
    </div>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        
    </script>
@stop