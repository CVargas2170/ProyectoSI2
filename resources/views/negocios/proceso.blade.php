@extends('adminlte::page')

@section('title', 'Clientes-Asignados')

@section('content_header')
    <h1>Clientes en proceso</h1>
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
                @if (isset($listas))
                <a href="{{route('administrativos.masivos')}}"class="btn btn-sm btn-info float-right">
                    <i class="fa fa-plus"></i>
                    &nbsp;
                    Enviar SMS masivo
                </a>
                @endif
               
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
                           Ultimo mensaje
                       </th>
                       
                       <!--    <th>
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
                @if (!isset($clientes))
                     <div class="card">
                       <h3> {{$mensaje }}</h3>
                     </div>
                @else
                <tbody>

                    @foreach($clientes as $cliente)
                        <tr>
                            
                        

                            <td>
                                  {{$cliente->nombre}} {{$cliente->apellido}}                        
                            </td>
                            <td>                              
                                {{"Hola"}}                            
                            </td>

                          <td>
                        
                      
                            <a href="{{route('administrativos.pasarAterminado',$cliente->id)}}" class="btn btn-sm btn-info p-1">
                                <i class="fa fa-edit"></i>
                                &nbsp;
                                Terminado
                         
                        </td>


                        </tr>
                    @endforeach
                   
                </tbody>
                @endif
                
               
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