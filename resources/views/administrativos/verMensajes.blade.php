@extends('adminlte::page')

@section('title', 'Mensajes')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/CRM.css')}}">
@livewireStyles
@section('content_header')
    <h1>Mensajes {{$cliente->nombre}}</h1>
@stop

@section('content')
@livewireScripts
<div class="card-custom">
    <div class="card-header">
        <div class="pull-right">
            <a href="{{route('administrativos.asignados')}}" class="btn btn-warning float-right">Volver
                <i class="fa fa-reply"></i>
            </a>
        </div>
    </div>
</div>

     <div class="container">
        <div class="col">
            <h4 class="card-title">Chat</h4><br>
            <div class="card" >
              <div class="card-body">      
                @livewire('chat1-list', ['id' => $cliente])
                @livewire('chat1-form', ['id' => $cliente->id])
                
               
              </div>
            </div>
          </div>
     </div>
     <br>
@stop

@section('css')

    <style>
        #form{
            /* border:2px black solid; */

        }

        
    </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
   /*        $(document).ready(function(){
            setInterval(
                function(){               
                      $('#mensajesArea').load('mensaje.blade.php');
                },2000
            );
        });
      /*  $(document).ready(function(){
            setInterval(
                function(){
                
                      $('#mensajesArea').load('{{ route('administrativos.viewMessages1') }}')
                },2000
            );
        });
     
    */
    </script>
@stop