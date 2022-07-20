@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Datos</h1>
@stop
@section('content')
        <div class="card-custom">
            <div class="card-header bg-secondary">
                <div class="card-title">
                    Editar datos de {{$promocion->descripcion}}               
                </div>
                <div class="pull-rigth">
                    <a href="{{route('promociones.index')}}" class="btn btn-sm btn-warning float-right">
                        <i class="fa fa-reply"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('promociones.update',$promocion)}}" method="post" id="formulario">
                    <fieldset>
                        <center><legend>Formulario de Edicion</legend></center>
                        @csrf
                        @method('PUT')
                        @include('promociones.partial.form')
                        <div class="pull-right mt-3">
                            <button class="btn btn-sm btn-success float-right">
                                <i class="fa fa-save"></i>
                                &nbsp;
                                Actualizar
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
                border:1px solid gray;
                padding: 2rem
        }
    </style>
@stop

@section('js')
    <script> 
    
    function llenarFoto2(){

var datos = $('#calzado_id').val();
var vector= datos.split('_');
document
         .getElementById("picture")
         .setAttribute("src","/img/"+vector[1]);


}
       
    
    </script>
@stop