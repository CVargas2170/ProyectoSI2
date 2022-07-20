{{-- @if(isset($administrativo) == null)
<div class="row">
    <div class="col-md-6">
        <label for="rol">
            Rol
        </label>
        <select name="rol_id" id="rol_id" class="form form-control">
            <option value="1">ADMINISTRATIVO</option>
            <option value="2">CLIENTE</option>
        </select>
    </div>
</div>
@endisset --}}

<div class="row">
    <div class="col-md-4">
        <label for="nombre">
            marca:
        </label>
        <input type="text" name="marca" id="marca" value="{{isset($calzado) ? $calzado->marca :''}}" class="form form-control" required>
    </div>
    <div class="col-md-4">
        <label for="apellidos">
            precio:
        </label>
        <input type="number" name="precio" id="precio" value="{{isset($calzado->precio)? $administrativo->apellidos : ''}}" class="form form-control"  required>
    </div>

    <div class="col-md-4">
        <label for="ci">
            Ci:
        </label>
        <input type="text" name="ci" id="ci" value="{{isset($calzado) ? $administrativo->ci : ''}}" class="form form-control"  required>
    </div>
    <div class="col-md-4">
        <label for="direccion">
            Direccion:
        </label>
        <input type="text" name="direccion" id="direccion" value="{{isset($administrativo) ? $administrativo->direccion:''}}" class="form form-control"  required>
    </div>
    <div class="col-md-4">
        <label for="correo">
            Correo:
        </label>
        <input type="text" name="correo" id="correo" value="{{isset($administrativo) ? $administrativo->correo : ''}}" class="form form-control"  required>
    </div>
    
    <div class="col-md-4">
        <label for="telefono">
            Telefono:
        </label>
        <input type="text" name="telefono" id="telefono" value="{{isset($administrativo) ? $administrativo->telefono : ''}}" class="form form-control"  required>

    </div>
    <div class="col-md-4">
        <label for="sexo">
            Sexo:
        </label>
        <select name="sexo" id="sexo" class="form form-control">
            @isset($administrativo))
                @if($administrativo->sexo == 'M')
                    <option value="M" selected >MASCULINO</option>
                @else
                    <option value="F" selected>FEMININO</option>
                @endif
            @else  
                <option value="M">MASCULINO</option>
                <option value="F">FEMENINO</option>
            @endisset
        
        </select>
    </div>
    <div class="col-md-4">
        <label for="fecha_nacimiento">
            Fecha Nacimiento:
        </label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{isset($administrativo)? $administrativo->fecha_nacimiento :'' }}" class="form form-control">
    </div>
    
    @isset($administrativo)
        <div class="col-md-4">
            <label for="estado">
                Estado:
            </label>
            <select name="estado" id="estado" class="form form-control {{$administrativo->estado == '1' ? 'bg-success' : 'bg-danger'}}">
                @if($administrativo->estado == '1')
                    <option value="1" selected>HABILITADO</option>
                    <option value="2" >DESHABILITADO</option>
                @else
                    <option value="1" >HABILITADO</option>
                    <option value="2" selected>DESHABILITADO</option>
                @endif
            </select>
        </div>
    @endisset



</div>