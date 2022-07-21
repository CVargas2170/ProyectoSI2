@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ventas Realizadas</h1>
@stop

@section('content')
   
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Listado de Ventas:
            @if(session('success'))
                <div class="alert alert-success" role="success">
                    {{session('success')}}
                </div>
            @endif
           
            </div>
            
            <div class="pull-right">
                <a href="{{route('ventas.create')}}"class="btn btn-sm btn-danger ml-2 float-left">
                    <i class="fa fa-book"></i>
                    &nbsp;
                    
                </a>
            </div>     
        </div>
      
        <div class="card-body">         
            <table id="miTabla" style="width:100%">
                <thead class="bg-secondary">
                    <tr>
                       <th class="text-center">
                           Nombre
                       </th>
                       <th class="text-center">
                           Monto Total
                       </th>
                       <th colspan="2" class="text-center">
                           Acciones
                       </th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($ventas  as $venta)
                        <tr>
                            <td class="text-center">
                              {{$venta->cliente->nombre .' '. $venta->cliente->apellido}}
                            </td>
                            <td class="text-center">
                                {{$venta->monto_total}}
                            </td>
                            {{-- @can('showVentas') --}}
                                <td class="text-center">
                                    <a href="{{route('ventas.show',$venta)}}" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye"></i>
                                        &nbsp;
                                        Ver
                                    </a>
                                </td>

                            {{-- @endcan --}}
                            {{-- <td class="text-center">
                                <form action="{{route('ventas.destroy')}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="venta_id" id="venta_id" value="{{$venta->id}}">
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                        &nbsp;
                                        Eliminar
                                    </button>
                                </form>
                                </a>
                            </td> --}}
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