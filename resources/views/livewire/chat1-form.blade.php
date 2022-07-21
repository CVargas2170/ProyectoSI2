<div>

    <div class="form-group ">
        <label for="nombre">Ingrese mensaje</label>
        <input type="text" class="form-control" id ="mensaje" wire:model="mensaje">
        @error("mensaje")<small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <button class="btn btn-primary" wire:click="enviarmensaje">Enviar Mensaje</button><br>
  

</div>

