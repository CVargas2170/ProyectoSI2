@extends('adminlte::page')

@section('title', 'CRM')

@section('content_header')
    <h1>Mensajes</h1>
    
@stop

@section('content')
    
<div class="card-custom">
    <div class="card-header">
        <div class="pull-right">
            <a href="{{route('administrativos.asignados')}}" class="btn btn-warning float-right">
                <i class="fa fa-reply"></i>
            </a>
        </div>

       
        <div class="pull-right">
            <button class="btn btn-sm btn-info floal-right" onclick="marcar()">
                Seleccioar Todos
            </button>
        </div>
    </div>
</div>

    <div class="card-custom border">

        <div class="card-header">
        

            <form action="{{route('administrativos.enviarMasivos1')}}" method="POST" id="form_send">
                @csrf
                @method('POST')
                <input type="hidden" name="tipo" id="tipo" value="1">
                <input type="hidden" name="administrativo_id" id="administrativo_id" value="{{Auth::user()->id}}">
                <div class="row">
                    <div class="col-md-12">
                            <div class="card-custom">
                                <div class="card-body">
                                    @foreach($clientes as $cliente)
                                     @foreach($lista as $item)
                                        @if($cliente->id == $item->cliente_id)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label >
                                                    <input type="checkbox" name="clientes[]" value="{{$cliente->id}}">
                                                    {{$cliente->nombre}} {{$cliente->apellido}}
                                                </label>
                                            </div>
                                        </div>
                                        @endif
                                     @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                </div>
                
                <div class="row">

                    <div class="col-md-8 m-auto">
                        <input type="text" id="mensaje" name="mensaje" class="form form-control" placeholder="Mensaje">
                    </div>
                
                </div>
                <div class="row mt-5">
                        <div class="m-auto">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-sm btn-info">
                                    <i class="fa fa-send"></i>
                                    &nbsp;
                                    Enviar
                                </button>
                            </div>
                        </div>
                </div>

            </form>
        </div>

        
        
    </div>



@stop

@section('css')

    <style>
        
        
    </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
       
    
    </script>
@stop