@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Formulario de Datos</h1>
@stop

@section('content')

    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Crear Nueva Promocion
            </div>
            <div class="pull-right">
                <a href="{{route('promociones.index')}}" class="btn bnt-sm btn-warning float-right">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
           
            <form action="{{route('promociones.store')}}" method="POST" id="formulario">
                <fieldset> 
                    <center><legend>DATOS PERSONALES </legend></center>
                        @csrf 
                        @method('post')
                        @include('promociones.partial.form')
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

        .contenedor{
            border:1px black solid;

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
         
document.getElementById("file").addEventListener("change", cambiarImagen);

function cambiarImagen(event) {
   var file = event.target.files[0];

   var reader = new FileReader();
   reader.onload = (event) => {
       document
           .getElementById("picture")
           .setAttribute("src", event.target.result);
   };
   reader.readAsDataURL(file);
}
    


    </script>
@stop