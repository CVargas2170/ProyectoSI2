<div>
    <h5 class="mt-3"><strong>Lista de mensajes</strong></h5>
    
    
      <div class="tarjeta_chat">
        
            @foreach ($mensajes as $mensaje)
          
             
                @if ($mensaje->tipo ==1)
                <div class="card-body  mensaje_recibido mt-3 fuente_homero_simpson" style="width: 35rem;">
                    <h6 class="card-title"> Tú:</h6>
                    <p class=" card-text " style="margin-left: 330px; font-family:'Courier New', Courier, monospace"> {{$mensaje->descripcion}}</p>
   
                </div>
                @else
                <div class="card-body  mensaje_recibido1 mt-3 fuente_homero_simpson" style="width: 35rem;">
                    <h6 class="card-title"> {{$nombre_cliente}} {{$apellido_cliente}}:</h6>
                    <p class="card-text"  style="margin-left: 330px; font-family:'Courier New', Courier, monospace"> {{$mensaje->descripcion}}</p>

                </div>
                @endif
                
                @endforeach  
                
                @foreach ($mensajes1 as $mensaje)
                <div class="card-body  mensaje_recibido mt-3" style="width: 25rem;">
                    <h6 class="card-title"> Tú:</h6>
                    <p class="card-text"  style="margin-left: 330px; font-family:'Courier New', Courier, monospace"> {{$mensaje['mensaje']}}</p>
                </div>
                
                @endforeach  
            
             </div>
          
       
       
      </div>
      
    
    
    
    </div>
    
