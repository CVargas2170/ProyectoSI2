@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Promociones</h1>
@stop

@section('content')
   
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
            Promociones:
            @if(session('success'))
                <div class="alert alert-success" role="success">
                    {{session('success')}}
                </div>
            @endif

            </div>
            <div class="pull-right">
                <a href="{{route('promociones.create')}}"class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-plus"></i>
                    &nbsp;
                    Crear Nueva Promoción
                </a>
            </div>
        </div>
      
        <div class="card-body">         
            <table id="miTabla"  class="table table-hover" style="width:100%">
                <thead class="bg-secondary">
                    <tr>
                       <th class="text-center">
                           Descrpcion
                       </th>
                       <th class="text-center">
                           Foto
                       </th>
                       <th class="text-center">
                           Descuento Aplicado
                       </th>
                       <th class="text-center">
                           Fecha de inicio
                       </th>
                       <th class="text-center">
                           Fecha final
                       </th>
                       
                       <th colspan="2" class="text-center">
                           Acciones
                       </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($promocioness as $promocion)
                        <tr>
                            <td class="text-center">
                                {{$promocion->descripcion}}
                            </td>
                            <td class="text-center">
                                <img src="/img/{{$promocion->imagen}}" alt="" width="80px" height="90px">
                            </td>
                            <td class="text-center">
                                {{$promocion->descuento}} % 
                            </td>
                            <td class="text-center">
                                {{$promocion->fecha_inicio}}
                            </td>
                            <td class="text-center">
                                {{$promocion->fecha_fin}}
                            </td>
                            <td>
                                <a href="{{route('promociones.edit',$promocion)}}" class="btn btn-sm btn-warning p-1">
                                    <i class="fa fa-edit"></i>
                                    &nbsp;
                                    Editar
                                </a>
                            </td>
                            
                            <td>
                                <form action="{{route('promociones.destroy')}}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <input type="hidden" id="promocion_id" name="promocion_id" value="{{$promocion->id}}">
                                    <div class="pull-right">
                                        <button class="btn btn-sm btn-danger float-right p-1" >
                                            <i class="fa fa-trash"></i>
                                            &nbsp;
                                            Eliminar
                                        </button>
                                    </div>
                                </form>
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

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css"> --}}
    
@stop

@section('js')
    <script> 
    $(document).ready(function() {
    $('#miTabla').DataTable();
} )

    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
@stop