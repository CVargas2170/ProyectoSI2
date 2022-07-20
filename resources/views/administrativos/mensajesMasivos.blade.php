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

        <div class="row">
            <div class="col-md-12">
                    <div class="card-custom">
                        <div class="card-body">
                            @foreach($clientes as $cliente)
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="clientes">
                                        <input type="checkbox" id="clientes" name="clientes[]" value="{{$cliente->id}}">
                                        {{$cliente->nombre}}
                                    </label>
                                </div>
                            </div>
        
                            @endforeach
                        </div>
                    </div>
                </div>
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
            <textarea name="mensajesArea" id="mensajesArea" cols="150" rows="10" class="ml-5 bg-cyan" readonly>
                
               
            </textarea>

            <form action="{{route('administrativos.enviar')}}" method="POST" id="form_send">
                @csrf
                @method('POST')
                <input type="hidden" name="tipo" id="tipo" value="1">
                <input type="hidden" name="administrativo_id" id="administrativo_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="cliente_id" id="cliente_id" value="">
                <div class="row">

                <div class="col-md-8 m-auto">
                    <input type="text" id="mensaje" name="mensaje" class="form form-control" placeholder="Mensaje">
                </div>
                
                </div>
                <div class="row mt-5">
                    <div class="m-auto">
                        <div class="pull-right">
                            <button type="submit" name="BtnSeleccionar" id="BtnSeleccionar" class="btn btn-sm btn-info">
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
        function marcar() {
    var elem=$('#clientes').elements;
    //console.log(elem);
    for (i=0;i<elem.length;i++){
        if (elem[i].type=="checkbox")
            elem[i].checked=true;
    }
}
    
    </script>
@stop