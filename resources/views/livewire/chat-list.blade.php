<div>
<h5 class="mt-3"><strong>Lista de mensajes</strong></h5>


  <div class="tarjeta_chat">
    
        @foreach ($mensajes as $mensaje)
      
         
            @if ($mensaje->tipo ==2)
            <div class="card-body  mensaje_recibido mt-3" style="width: 15rem;">
                <h6 class="card-title"> Tú:</h6>
                <p class="card-text"> {{$mensaje->descripcion}}</p>
            </div>
            @else
            <div class="card-body  mensaje_recibido1 mt-3" style="width: 15rem;">
                <h6 class="card-title"> Administrativo {{$mensaje->administrativo_id}}:</h6>
                <p class="card-text"> {{$mensaje->descripcion}}</p>
            </div>
            @endif
            
            @endforeach  
            
            @foreach ($mensajes1 as $mensaje)
            <div class="card-body  mensaje_recibido mt-3" style="width: 15rem;">
                <h6 class="card-title"> Tú:</h6>
                <p class="card-text"> {{$mensaje['mensaje']}}</p>
            </div>
            
            @endforeach  
        
         </div>
      
   
   
  </div>
  



</div>
