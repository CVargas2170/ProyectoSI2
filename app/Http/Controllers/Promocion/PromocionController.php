<?php

namespace App\Http\Controllers\Promocion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promocion;
use App\Models\Calzado;
use Illuminate\Support\Facades\Auth;
use App\Models\Bitacora\Bitacora;

class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        $promocioness = Promocion::where('estado',1)->get();
        return view('promociones.index',compact('promocioness'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zapatos = Calzado::get();
        return view('promociones.create',compact('zapatos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $inputs = $request->all();
        $id=substr($inputs['calzado_id'],0,1);
        $imagen = substr($inputs['calzado_id'],2,strlen($inputs['calzado_id'])-1);
        //dd($imagen);
        $inputs['calzado_id']=$id;
        $inputs['imagen']=$imagen;
        //dd($inputs);
        
        $promocion = Promocion::create([
            'descripcion'=>$inputs['descripcion'],
            'descuento' =>$inputs['descuento'],
            'fecha_inicio' => $inputs['fecha_inicio'],
            'fecha_fin' => $inputs['fecha_fin'],
            'imagen' => $imagen,
            'calzado_id' => $id,

        ]);
        Bitacora::create([
            'user_id' => Auth::user()->id,
            'accion' => Bitacora::TIPO_CREO,
            'tabla' => 'Promociones',
            'datos' => 'Se creo una nueva promocion ',

          ]);
        
        return redirect()->route('promociones.index');
        
    }

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
    public function edit(Promocion $promocion)
    {
        $zapatos = Calzado::get();
        return view('promociones.edit',compact('promocion','zapatos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promocion $promocion)
    {
        $inputs = $request->all();
        $id=substr($inputs['calzado_id'],0,1);
        $imagen = substr($inputs['calzado_id'],2,strlen($inputs['calzado_id'])-1);
        //dd($imagen);
        $inputs['calzado_id']=$id;
        $inputs['imagen']=$imagen;
        //dd($inputs);
        
        $promocion->update([
            'descripcion'=>$inputs['descripcion'],
            'descuento' =>$inputs['descuento'],
            'fecha_inicio' => $inputs['fecha_inicio'],
            'fecha_fin' => $inputs['fecha_fin'],
            'imagen' => $imagen,
            'calzado_id' => $id,

        ]);
        Bitacora::create([
            'user_id' => Auth::user()->id,
            'accion' => Bitacora::TIPO_EDITO,
            'tabla' => 'Promociones',
            'datos' => 'Se edito una promocion  existente',

          ]);
        return redirect()->route('promociones.index');
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
        $id = $inputs['promocion_id'];
        $prom = Promocion::find($id);
        $prom->update([
            'estado' => 0,

        ]);
        Bitacora::create([
            'user_id' => Auth::user()->id,
            'accion' => Bitacora::TIPO_ELIMINO_ANULO,
            'tabla' => 'Promociones',
            'datos' => 'Se Elimino una promocion  existente',

          ]);
        return redirect()->route('promociones.index');
    }
}
