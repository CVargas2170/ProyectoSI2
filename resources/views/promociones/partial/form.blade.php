<div class="row">
    <div class="col-xs-7 col-sm-7 col-md-7 img text-center">
        <label for="file" class="form-label la">
            Foto
        </label>
        <img
            class="imagen"
            id="picture"
            src="{{isset($promocion) ? '/img/promocion'.'/'.$zapatos->imagen:'https://www.bootdey.com/app/webroot/img/hero-graphic.png'}}"
            alt=""
            width="250px"
            value="{{old('picture')}}"
           >

    </div>
    {{-- <div class="col-xs-7 col-sm-7 col-md-7 imgUser">
        <input

            id="file"
            accept="image/*"
            name="image"
            accept="image/*"
            type="file"
            
            >

    </div>   --}}
    
           
    
</div>
<div class="row mt-3">
    
        <div class="col-md-9">
            <label for="descripcion">
                Descripcion de la promocion:
            </label>
            <input type="text" id="descripcion" name="descripcion" value="{{isset($promocion)? $promocion->descripcion:''}}" class="form form-control" required>
        </div>
        
        <div class="col-md-4">
            <label for="descuento">
                Descuento:
            </label>
            <input type="number" id="descuento" name="descuento" value="{{isset($promocion)? $promocion->descuento:''}}" class="form form-control" required>
        </div>
            
        <div class="col-md-4">
                    <label for="fecha_inicio">
                        Fecha de Inicio:
                    </label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{isset($promocion)?$promocion->fecha_inicio:''}}" class="form form-control" required>
        </div>
         <div class="col-md-4">
                    <label for="fecha_fin">
                        Fecha de Fin:
                    </label>
                    <input type="date" id="fecha_fin" name="fecha_fin" value="{{isset($promocion) ? $promocion->fecha_fin : ''}}" class="form form-control" required>
        </div>

        <div class="col-md-7">
            <label for="calzado_id">
                Calzado:
            </label>
            <select name="calzado_id" id="calzado_id" class="form form-control" onchange="llenarFoto2(this);">
                <option value="">-</option>
                @foreach($zapatos as $zapato)
                    <option value="{{$zapato->id}}_{{$zapato->imagen}}">{{$zapato->marca}} {{$zapato->detalle}}</option>

                @endforeach

            </select>
        </div>
        
    
   
</div>