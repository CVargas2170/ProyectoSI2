@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Clientes</h1>
@stop

@section('content')
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Clientes:
            </div>
         
        </div>
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    
    @if(session('danger'))
        <div class="alert alert-danger" role="alert">
            {{session('danger')}}
        </div>
    @endif
        
        <div class="card-body table-responsive">
            <table id="miTabla"  class="table table-striped table-bordered table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Apellidos
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Telefono
                        </th>
                       
                        <th colspan="3" class="text-center">
                            Acciones
                        </th>
                    </tr>
                    

                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>
                                {{$cliente->nombre}}
                            </td>
                            <td>
                                {{$cliente->apellido}}
                            </td>
                            <td>
                                {{$cliente->email}}
                            </td>
                            <td>
                                {{$cliente->telefono}}
                            </td>
                            <td>
                         
                                <form action="{{route('administrativos.lista')}}" method="post">
                                   
                                    @csrf 
                                    <div class="row">
                                        <div class="col form form-control">
                                            <select name="administrativo" id="administrativo" class="">
                                                <option value="">Añadir a:</option>
                                                @foreach ($administrativos as $administrativo)
                                                <option value="{{$administrativo->nombre}}">{{$administrativo->nombre}}</option>
                                                @endforeach
                                              </select>
                                        </div>
                                        <div class="col">
                                            <input id="iduser" name="iduser" type="hidden" value="{{auth()->user()->id}}">
                                            <input id="idcliente" name="idcliente" type="hidden" value="{{$cliente->id}}">
                                            <button class="btn btn-sm btn-success float-right p-1" >
                                                <i class="fa fa-edit"></i>
                                                &nbsp;
                                                Añadir
                                            </button>
                                        </div>
                                    </div>    
                                </form>
                            </td>
                               
                               
                                  <td>     
                                <a href="{{route('clientes.edit',$cliente)}}" class="btn btn-sm btn-warning">
                                    <i class="fa fa-edit"></i>
                                    &nbsp;
                                    Editar
                                </a>
                            </td>
                            <td>
                                <a href="{{route('clientes.show',$cliente)}}" class="btn btn-sm btn-info">
                                    <i class="fa fa-eye"></i>
                                    &nbsp;
                                    Ver
                                </a>
                            </td>
                            <td>
                             <!--   <form action="{{route('clientes.destroy')}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="cliente_id" id="cliente_id" value="{{$cliente->id}}">
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                        &nbsp;
                                        Eliminar
                                    </button>
                                </form>-->
                            </td>
                        </tr>


                    @endforeach
                </tbody>


            </table>
        </div>


    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

@stop

@section('js')
    <script>
        $(document).ready(function() {
        $('#miTabla').DataTable();
        } );

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script>
        window.setTimeout(function{
            $('.alert').fadeTo(200,0).slideDown(1000,function(){
                $(this).remove();
            })
        },3000);
    </script>
@stop