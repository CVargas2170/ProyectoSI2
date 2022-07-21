<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Chat1Form extends Component
{
 
    public $mensajes; //vista
    public $mensajes1;//´para la BD
    public $id_cliente;
    public $id_administrativo;
    public $msjs; 
    public function mount(){
        $this->nombre ="";
        $this->mensaje ="";
    }
    
    public function render()
    {
        return view('livewire.chat1-form');
    }
    public function updated($field){
        $this->validateOnly($field,[
          
            "mensaje" =>"required"  
        ]);
    }

    public function enviarmensaje(){
        $this->validate([
             //   "nombre"=>"required|min:3",
                "mensaje" =>"required"
        ]);

     

       // $this->emit("mensajeEnviado");
        $datos = [
      
            "mensaje" =>$this->mensaje

        ];
        $this->emit("mensajeRecibido",$datos);
    }
}
