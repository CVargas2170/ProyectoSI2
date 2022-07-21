<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrativo\Administrativo;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Bitacora\Bitacora;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Models\Calzado;
use App\Models\Cliente\Cliente;
use App\Models\Lista;
use Illuminate\Support\Facades\Auth;
use App\Models\Mensaje;


class AdministrativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrativos = Administrativo::get();
        return view('administrativos.index',compact('administrativos'));
    }
    public function lista(Request $request){

        $inputs = $request->all();
        $iduser = $inputs['iduser'];
        $administrativo =$inputs['administrativo'];
        $clienteid = $inputs['idcliente'];
        $admin = Administrativo::where('nombre',$administrativo)->first(); 
        Lista::create([
            'cliente_id' =>  $clienteid,
            'administrativo_id' =>$admin->id,
          ]);
        $cliente =Cliente::where('id',$clienteid)->first(); 
          $cliente->update([
            'tipo_cliente' => 2,
        ]);
        return redirect()->route('clientes.index')->with('Exitoso','Cliente añadido');
    }


   

   /* public function showMessage(Cliente $cliente){
        $id = Auth::user()->id;
        $mensajes = Mensaje::where('cliente_id',$cliente->id)->get();
        //dd($mensajes);
        return view('administrativos.verMensajes',compact('mensajes','cliente','id'));

    }*/

    public function showMessage( Cliente $cliente){
        $id = Auth::user()->id;
        $mensajes = Mensaje::where('cliente_id',$cliente->id)->get();

        //dd($mensajes);
        return view('administrativos.verMensajes',compact('mensajes','cliente','id'));

    }
    public function showMessage1(){
        $id = Auth::user()->id;
        $email_admin = Auth::user()->email;
        $id_admin =Administrativo::where('correo',$email_admin);
        $cliente = Cliente::find(8);
        $mensajes = Mensaje::where('cliente_id',8)->get();
        //dd($mensajes);
        return view('administrativos.verMensajes',compact('mensajes','cliente',' $id_admin'));

    }
    public function enviar(Request $request){
        $inputs = $request->all();
        //dd($inputs);
     //   $mensaje= Mensaje::create($inputs);
        $admin =Administrativo::where('correo',$request['administrativo_id'])->first();
        Mensaje::create([
            'descripcion' => $request['descripcion'],
            'administrativo_id' => $admin->id,
            'cliente_id' =>$request['cliente_id'],
            'tipo' => 1,
            
          ]);
       //return view('administrativos.verMensajes');
       return redirect()->back();
      
    }



    public function asignados(){
        $user_id = Auth::user()->id;
        $user_email =Auth::user()->email;
        $admin1 = Administrativo::where('correo',$user_email)->first();
        $listas = Lista::where('administrativo_id',$admin1->id)->get();
        $admin2= $admin1->id;
        $clientes = Cliente::get();
        $administrativos = Administrativo::get();
        if($listas ==null){
            $mensaje="Usted no tiene clientes asignados";
            return view('administrativos.asignados',compact('mensaje','clientes','administrativos','admin2'));
        }else{
            return view('administrativos.asignados',compact('listas','clientes','administrativos','admin2'));
        }

     
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function calzado(){
        $calzados = DB::table('calzado')->get();
        return view('calzados.index',compact('calzados'));
     }
    public function create()
    {
        $usuarios = User::where('tipo_id',3)->get();
        return view('administrativos.create',compact('usuarios'));
    }

    public function create1()
    {
        return view('calzado.create');
    }

    public function store1(Request $request)
    {
        $inputs = $request->all();
        $admin = Calzado::create($inputs);
        $persona_id = $admin->id;
        $nombre = $inputs['nombre'];
        $email = $inputs['correo'];
        $ci = $inputs['ci'];
        $rol_id = 1; 
       // dd($inputs);

       Bitacora::create([
        'user_id' => 1,
        'accion' => Bitacora::TIPO_CREO,
        'tabla' => 'administrativos',
        'datos' => 'Se agregaron los siguiente datos '.
         $inputs['nombre'] . $inputs['correo'] . $inputs['ci'] .'con rol administrativo', 

      ]);

        $this->crearUsuario($nombre,$email,$ci,$rol_id,$persona_id);
        return redirect()->route('administrativos.index')->with('success','Administrativo Creado con Exito');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $admin = Administrativo::create($inputs);
        $persona_id = $admin->id;
        $nombre = $inputs['nombre'];
        $email = $inputs['correo'];
        $ci = $inputs['ci'];
        $rol_id = 1; 
       // dd($inputs);
      //  $admin1 = $inputs['administrativo'];

        Bitacora::create([
        'user_id' => 1,
        'accion' => Bitacora::TIPO_CREO,
        'tabla' => 'administrativos',
        'datos' => 'Se agregaron los siguiente datos '.
         $inputs['nombre'] . $inputs['correo'] . $inputs['ci'] .'con rol administrativo', 

      ]);

        $this->crearUsuario($nombre,$email,$ci,$rol_id,$persona_id);
        return redirect()->route('administrativos.index')->with('success','Administrativo Creado con Exito');
    }

    public function pdf(){
        $administrativos = Administrativo::get();
        return view('administrativos.pdf',compact('administrativos'));

    }


    private function crearUsuario($name,$email,$ci,$rol_id,$persona_id){

        $usuario = User::create([
            'name' => $name,
            'email'=> $email,
            'password' => \bcrypt($ci),
            'role_id' => $rol_id,
            'tipo_id' => 1,
            'persona_id' =>$persona_id,
        
        ]);
        $rol = Role::find($rol_id);
        $usuario->assignRole($rol);
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Administrativo $administrativo)
    {
        return view('administrativos.show',compact('administrativo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrativo $administrativo)
    {
        return view('administrativos.edit',compact('administrativo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Administrativo $administrativo)
    {
        $inputs = $request->all();
        $administrativo->update($inputs);
        $email = $inputs['correo'];
        $ci = $inputs['ci'];
        $name= $inputs['nombre'];
        $usuario = User::where('tipo_id',1)->where('persona_id',$administrativo->id)->first();

        $usuario->update([
            'email' => $email,
            'name' => $name,
            'password' => \bcrypt($ci)
        ]);

        return redirect()->route('administrativos.index')->with('success','Datos editado correctamente');
    }

    public function enviarGeneral(){
        $user_id = Auth::user()->id;
        $user_email =Auth::user()->email;
        $admin1 = Administrativo::where('correo',$user_email)->first();
        $lista = Lista::where('administrativo_id',$admin1->id)->get();
        $clientes = Cliente::get();
        ;
        return view('administrativos.mensajesMasivos',compact('clientes','lista'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {
        $inputs = $request->all();
        $id = $inputs['admin_id'];
        $admin = Administrativo::find($id);
        $admin->update([
            'estado' => 2
        ]);
        return redirect()->route('administrativos.index')->with('success','eliminado con exito');
    }
}
