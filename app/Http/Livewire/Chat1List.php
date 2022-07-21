<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Mensaje;
use App\Models\Lista;
use App\Models\Administrativo\Administrativo;
use Illuminate\Support\Facades\Auth;
class Chat1List extends Component
{   
    public $mensajes; //vista
    public $mensajes1;//´para la BD
    public $id_cliente;
    public $nombre_cliente;
    public $apellido_cliente;
    public $id_administrativo;
    public $msjs; //Lista de mensajes para mostrar con id del cliente
    protected $listeners =["mensajeRecibido"]; // ni idea

    public function mount($id){
        $usuario = Auth::user()->email; 
        $id_admin =Administrativo::where('correo',$usuario)->first();
         $this->id_cliente = $id->id;
         $this->nombre_cliente =$id->nombre;
         $this->apellido_cliente=$id->apellido;
         $this->id_administrativo = $id_admin->id; 
         $msjs = Mensaje::where('cliente_id',$this->id_cliente)->get();
 
      $this->mensajes=$msjs;
         $this->mensajes1=[];
       
    }

    public function mensajeRecibido($mensaje){
      // $msjs = Mensaje::where('cliente_id');
      Mensaje::create([
        'descripcion' => $mensaje['mensaje'],
        'administrativo_id' => $this->id_administrativo,  
        'cliente_id' =>$this->id_cliente,
        'tipo' => 1,
        
      ]);
     $this->mensajes1[]=$mensaje;
    
      
    }

    public function render()
    {
        return view('livewire.chat1-list');
    }
}
