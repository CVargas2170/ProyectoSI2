<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mensaje;
use App\Models\Lista;
use App\Models\Administrativo\Administrativo;

use App\Models\User;
class ChatList extends Component
{
    public $mensajes; //vista
    public $mensajes1;//´para la BD
    public $id_cliente;
    public $id_administrativo;
    public $msjs; //Lista de mensajes para mostrar con id del cliente
    protected $listeners =["mensajeRecibido"]; // ni idea

    public function mount($id){
       $usuario = User::find($id); 
    
        $this->id_cliente = $usuario->persona_id;
        $admin = Lista::find($usuario->persona_id);
        $this->id_administrativo = $admin->administrativo_id; 
        $msjs = Mensaje::where('cliente_id',$usuario->persona_id)->get();

        $this->mensajes=$msjs;
        $this->mensajes1=[];
       
    }

    public function mensajeRecibido($mensaje){
      // $msjs = Mensaje::where('cliente_id');
        Mensaje::create([
          'descripcion' => $mensaje['mensaje'],
          'administrativo_id' => $this->id_administrativo,  
          'cliente_id' =>$this->id_cliente,
          'tipo' => 2,
          
        ]);
       $this->mensajes1[]=$mensaje;
      
    }

    public function render()
    {
        return view('livewire.chat-list');
    }
}
