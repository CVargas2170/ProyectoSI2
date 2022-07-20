<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Administrativo\Administrativo;
use Illuminate\Http\Request;
use App\Models\Cliente\Cliente;
use App\Models\Promocion;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\Lista;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  //$clientes = Cliente::get();
        /*$clientes = DB::table('clientes')
                    //->groupBy('marca','precio','stock','estado','detalle','imagen')
                   ->where('tipo_cliente','=',1)->get();*/
        $clientes =Cliente::query()
                          //  ->with('estado_color')
                            ->where('tipo_cliente',1)
                            ->get();
        $administrativos = Administrativo::get();
        return view('clientes.index',compact('clientes','administrativos'));
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
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
        $cliente = Cliente::create($inputs);
        $email = $inputs['email'];
        $rol_id=2;
        $contraseña = $inputs['nombre'].'123';
      
        $persona_id= $cliente->id;
        $this->crearUsuario($inputs['nombre'],$email,$contraseña,$rol_id,$persona_id);
        
        return redirect()->route('clientes.index')->with('success','Cliente creado con Exito');
    }   

    public function store1(Request $request)
    {    
        $inputs = $request->all();
        $cliente = Cliente::create($inputs);
        $cliente->estado =1;
        $cliente->tipo =2;
        $email = $inputs['email'];
        $rol_id=2;
        $contraseña = $inputs['password'];
      
        $persona_id= $cliente->id;
        $this->crearUsuario($inputs['nombre'],$email,$contraseña,$rol_id,$persona_id);
        
      //  return redirect()->route('clientes.loginregister')->with('success','Cliente creado con Exito');
      return view('tienda.login.loguear');
    }   


    private function crearUsuario($name,$email,$ci,$rol_id,$persona_id){

        $usuario = User::create([
            'name' => $name,
            'email'=> $email,
            'password' => \bcrypt($ci),
            'role_id' => $rol_id,
            'tipo_id' => 2,
            'persona_id' =>$persona_id,

        ]);
        $rol = Role::find($rol_id);
        $usuario->assignRole($rol);


    }
    public function store2(Request $request)
    {    
        $inputs = $request->all();
        $cliente = Cliente::create($inputs);
        $cliente->estado =1;
        $cliente->tipo =2;
        $cliente->tipocliente = 1; //default crea con 1     1->nuevo cliente
        $email = $inputs['email'];
        $rol_id=2;
        $contraseña = $inputs['password'];
      
        $persona_id= $cliente->id;
        $this->crearUsuario1($inputs['nombre'],$email,$contraseña,$rol_id,$persona_id);
        
       return redirect()->route('tienda');
     // return view('tienda.principal');
    }   

    private function crearUsuario1($name,$email,$ci,$rol_id,$persona_id){

        $usuario = User::create([
            'name' => $name,
            'email'=> $email,
            'password' => $ci,
            'role_id' => $rol_id,
            'tipo_id' => 2,
            'persona_id' =>$persona_id,

        ]);
        $rol = Role::find($rol_id);
        $usuario->assignRole($rol);


    }

    public function loginCliente1(Request $request){
        $inputs = $request->all();
        $email = $inputs['email'];
        $password = $inputs['password'];
        $consulta= DB::table('users')
        ->where([
            ['email','=',$email],
            ['password', '=',$password],
          ])->get(); 
          if(count($consulta)>=1 ){  
            $promociones = Promocion::all();
<<<<<<< HEAD
            $calzados =  DB::table('calzados')->where('estado','=','Promocion')->get();
            $calzados1 = DB::table('calzados')->where([['estado','=','Destacado'],['tipo', '=','mujer'],])->get();
            $calzados2 = DB::table('calzados') ->where([['estado','=','Destacado'],['tipo', '=','hombre'],])->get();
            $hombres =   DB::table('calzados')->where('tipo','=','hombre')->get();   
            $niños =     DB::table('calzados') ->where('tipo','=','kidman')->get();
            $mujeres =   DB::table('calzados')->where('tipo','=','mujer')->get();   
            $niñas =     DB::table('calzados') ->where('tipo','=','kidwoman')->get(); 

=======
            $calzados =  DB::table('calzado')->where('estado','=','Promocion')->get();
            $calzados1 = DB::table('calzado')->where([['estado','=','Destacado'],['tipo', '=','mujer'],])->get();
            $calzados2 = DB::table('calzado') ->where([['estado','=','Destacado'],['tipo', '=','hombre'],])->get();
            $hombres =   DB::table('calzado')->where('tipo','=','hombre')->get();   
            $niños =     DB::table('calzado') ->where('tipo','=','kidman')->get();
            $mujeres =   DB::table('calzado')->where('tipo','=','mujer')->get();   
            $niñas =     DB::table('calzado') ->where('tipo','=','kidwoman')->get(); 
            $cliente=   DB::table('clientes')->where('email','=', $email)->first();
>>>>>>> 4613c0e550339a0b3b1be29891212546cc2fba5b
            $nombre = DB::table('users')->where('email','=', $email)->value('name');
            $id =DB::table('users')->where('email','=', $email)->value('id');
            return view('tienda.perfil',compact('calzados','calzados1','calzados2',
                        'hombres','niños','mujeres','niñas','nombre','id','promociones','cliente'));
     //   return view('tienda.prueba',compact('nombre','id'));
        }else{
            return "Datos incorrectos";
        }

    }
    
    public function pdf(){
        $clientes = Cliente::get();
        return view('clientes.pdf',compact('clientes'));

    }
    public function SalirCliente(){
        
        $cerrar = "Logout";
        return redirect()->route('tienda',compact('cerrar'));
    }

   /* */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Cliente $cliente)
    {
            $inputs = $request->all();
            $usuario = User::where('tipo_id',2)->where('persona_id',$cliente->id)->first();
            $usuario->update([
                'email' => $inputs['email'],
                'name' =>$inputs['nombre'],
                'password' => \bcrypt($inputs['nombre'].'123'),
            ]);

            $cliente->update($inputs);
            return redirect()->route('clientes.index')->with('success','Cliente Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $inputs = $request->all();
        $id = $inputs['cliente_id'];
        $cliente = Cliente::find($id);
        $cliente->update([
            'estado' => 2,
        ]);
        return redirect()->route('clientes.index')->with('danger','Cliente Eliminado Existosamente');
    }
}
