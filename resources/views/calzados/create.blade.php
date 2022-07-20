@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Formulario de Datos</h1>
@stop

@section('content')

    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Creacion de Personal Administrativo
            </div>
            <div class="pull-right">
                <a href="{{route('calzado.index')}}" class="btn bnt-sm btn-warning float-right">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
           
            <form action="{{route('administrativos.store')}}" method="POST" id="formulario">
                <fieldset> 
                    <center><legend>DATOS PERSONALES </legend></center>
                        @csrf 
                        @method('post')
                        @include('administrativos.partial.form')
                        <div class="pull-right mt-3">
                            <button type="submit" class="btn btn-sm btn-success float-right">
                                <i class="fa fa-save"></i>
                                &nbsp;
                                Guardar
                            </button>
                        </div>
                        
                 </fieldset>
            </form>


        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <style>

        #formulario{
            color:gray;
            border:1px solid gray;
            padding:2rem

        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop