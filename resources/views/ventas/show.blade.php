@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  

@section('content')


<div class="card-custom">
    <div class="card-header bg-secondary">
        <div class="card-title">
          Datos de la venta:
        </div>
        <div class="pull-right">
            <a href="{{route('ventas.index')}}" class="btn btn-sm btn-warning float-right">
                <i class="fa fa-reply"></i>
            </a>
        </div>
    </div>
    <dir>
        
    </dir>
    <div class="card-custom bg-secondary">
        {{-- <div class="card header bg-secondary">
        
        </div> --}}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                <label for="cliente">
                        Cliente:
                    </label>
                    <input type="text" name="cliente_id" id="cliente_id" value="{{$venta->cliente->nombre . ' '.$venta->cliente->apellido}}" class="form form-control" readonly>
            </div>  

            
            <div class="col-md-5">
                <label for="monto_total">
                    Monto Total de la venta:
                </label>
                <input type="text" name="monto_total" id="monto_total" value="{{$venta->monto_total}}" class="form form-control" readonly >
            </div>

            <div class="col-md-5">
                <label for="fecha_venta">
                    Fecha de Venta:
                </label>
                <input type="text" name="fecha_venta" id="fecha_venta" value="{{$venta->fecha_creacion}}" class="form form-control" readonly>
            </div>

          </div>
       </div>
      
    </div>
    
    <center><span style="font-size: 20px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:red; margin-top:5px">DETALLES</span></center>
    <div class="card-custom">
        <div class="card-header">

        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="bg-secondary">
                    <tr>
                        <th class="text-center">
                            Calzado
                        </th>
                        <th class=text-center>
                            Precio
                        </th>
                        <th class="text-center">
                            Cantidad
                        </th>
                        <th class="text-center">
                            Sub Total
                        </th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($detalles as $detalle)

                        <tr>
                            <td class="text-center">
                                {{$detalle->calzado->marca}}
                            </td>
                            <td class="text-center">
                                {{$detalle->calzado->precio}}
                            </td>
                            <td class="text-center">
                                {{$detalle->cantidad}}
                            </td>
                            <td class="text-center">
                                {{$detalle->sub_total}}
                            </td>
                        </tr>


                    @endforeach
                   
                </tbody>
                
                
            </table>
            <br>
            <br>
            <div class="card-custom">
                <div class="card-body">
                    <div class="pull-right">
                        {{-- <input type="text" name="monto_total" id="monto_total" value="Total de la venta : {{$venta->monto_total}}" class="form form-control" readonly> --}}
                        <span class="float-right" style="font-size: 50px"> Total de la venta : {{$venta->monto_total}}</span>
                    </div>
                </div>
            </div>

                

        
            
        </div>
     
    </div>
</div>






@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop