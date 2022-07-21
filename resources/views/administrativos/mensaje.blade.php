

<textarea name="mensajesArea" id="mensajesArea" cols="150" rows="10" class="ml-5 bg-cyan" readonly>
                
                @foreach($mensajes as $men)
                
                    @if($men->tipo==1)
                       {{$men->descripcion}}
                        
                    @else
                   {{'                                                              '.$men->descripcion}} 
                    @endif
                @endforeach
            </textarea>