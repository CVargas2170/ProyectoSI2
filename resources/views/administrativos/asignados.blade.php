@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Clientes Asignados</h1>
@stop

@section('content')
   
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Clientes:
            @if(session('success'))
                <div class="alert alert-success" role="success">
                    {{session('success')}}
                </div>
            @endif
           
            </div>
           
            <div class="pull-right">
                <a href="{{route('administrativos.pdf')}}"class="btn btn-sm btn-danger ml-2 float-left">
                    <i class="fa fa-book"></i>
                    &nbsp;
                    PDF
                </a>
            </div> 
            
            
        </div>
      
        <div class="card-body">         
            <table id="miTabla" class="cell-border" style="width:100%">
                <thead class="bg-secondary">
                    <tr>
                       <th>
                           Nombre
                       </th>
                     <th>
                           Apellido
                       </th>
                    <!--     <th>
                           Ci
                       </th>
                       <th>
                           Email
                       </th>
                       <th>
                           Direccion
                       </th>
                       <th>
                           Telefono
                       </th>
                        <th>
                           Estado
                       </th>-->
                       <th colspan="3" class="text-center">
                           Acciones
                       </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($listas as $lista)
                        <tr>
                            <td>
                
                                
                                  {{$clientes->where('id',$lista->cliente_id)->first()->nombre}}
                                
                            </td>
                            <td>
                
                                
                                {{$clientes->where('id',$lista->cliente_id)->first()->nombre}}
                              
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