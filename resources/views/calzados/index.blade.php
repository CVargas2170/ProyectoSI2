@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Calzados</h1>
@stop

@section('content')
   
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Calzados:
            @if(session('success'))
                <div class="alert alert-success" role="success">
                    {{session('success')}}
                </div>
            @endif
           
            </div>
           
          
            
            <div class=" pull-right">
                
                <a href="{{route('administrativos.create1')}}"class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-plus"></i>
                    &nbsp;
                    Crear Nuevo calzados
                </a>

            </div>
            
            
        </div>
      
        <div class="card-body">         
            <table id="miTabla" class="cell-border" style="width:100%">
                <thead class="bg-secondary">
                    <tr>
                       <th>
                           marca
                       </th>
                       <th>
                           precio
                       </th>
                      
                       <th>
                           estado
                       </th>
                       <th>
                           detalle
                       </th>
                       <th>
                           modelo
                       </th>
                       
                       <th colspan="3" class="text-center">
                           Acciones
                       </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($calzados as $calzado)
                        <tr>
                            <td>
                                {{$calzado->marca}}
                            </td>
                            <td>
                                {{$calzado->precio}}
                            </td>
                            <td>
                                {{$calzado->marca}}
                            </td>
                           
                            <td>
                                {{$calzado->estado}}
                            </td>
                            <td>
                                {{$calzado->detalle}}
                            </td>
                            <td>
                                {{$calzado->modelo}}
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