@extends('adminlte::page')

@section('title', 'Clientes-Asignados')

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
                           Apellido
                       </th>
                       <th>
                        Tipo Cliente
                    </th>
                     <th>
                           Celular
                       </th>
                       <th>
                           Email
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
                @if (!isset($listas))
                     <div class="card">
                       <h3> {{$mensaje }}</h3>
                     </div>
                @else
                <tbody>

                    @foreach($listas as $lista)
                        <tr>
                            
                        

                            <td>
                                  {{$clientes->where('id',$lista->cliente_id)->first()->nombre}}                            
                            </td>
                            <td>                              
                                {{$clientes->where('id',$lista->cliente_id)->first()->apellido}}                            
                            </td>
                            <td>
                                {{($ventas->where('cliente_id',$lista->cliente_id))->count()>=1 ? 'Cliente Fiel' :'Cliente normal'}}

                            </td>
                            <td>                              
                                {{$clientes->where('id',$lista->cliente_id)->first()->telefono}}                            
                            </td>
                            <td>                              
                                {{$clientes->where('id',$lista->cliente_id)->first()->email}}                            
                            </td>

                          
                          <td >
                              
                                <a href="{{route('administrativos.viewMessages',$clientes->where('id',$lista->cliente_id)->first()->id)}}">
                                    <i class="fa fa-sms"></i>
                                    &nbsp;
                                    Ver SMS 
                                </a>

                          </td>
                          <td>
                            <a href="{{route('administrativos.pasarAespera',$clientes->where('id',$lista->cliente_id)->first()->id)}}" class="btn btn-sm btn-danger p-1">
                                <i class="fa fa-edit"></i>
                                &nbsp;
                                Espera
                            </a>
                            <a href="{{route('administrativos.pasarAproceso',$clientes->where('id',$lista->cliente_id)->first()->id)}}" class="btn btn-sm btn-warning p-1">
                                <i class="fa fa-edit"></i>
                                &nbsp;
                                Proceso
                            </a>
                            <a href="{{route('administrativos.pasarAterminado',$clientes->where('id',$lista->cliente_id)->first()->id)}}" class="btn btn-sm btn-info p-1">
                                <i class="fa fa-edit"></i>
                                &nbsp;
                                Concluido
                            </a>
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