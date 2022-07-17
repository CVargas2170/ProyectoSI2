<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::get();
        return view('roles.index',compact('roles'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permisos = Permission::get();
        return view('roles.create',compact('permisos'));
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
        $permisos = $inputs['permisos'];
        $rol = Role::create($inputs);
        $rol->syncPermissions($permisos);

        //dd(count($permisos));
        return redirect()->route('roles.index')->with('success','Rol Creado con Exito');
        
        
    }

    /**
     * Display the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $rol)
    {  $permisos = $rol->permissions;
        return view('roles.show',compact('rol','permisos'));     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $rol)
    {
            $permisos = Permission::get();
            foreach($permisos as $permiso){
                $has = $rol->hasPermissionTo($permiso->name);
                if($has){
                    $permiso->checked = 1;
                }


            }
            return view('roles.edit',compact('rol','permisos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Role $rol)
    {
        $inputs = $request->all();
        $permisos = $inputs['permisos'];
        
                // SI NO FUNCIONA ENTOCES BORRAR ESTA LINEA
       
            // foreach($permisos as $permiso){
            //     $permiso->name->

            // }

                // HASTA AQUI
        $rol->update($inputs);
        $rol->syncPermissions($permisos);
        return redirect()->route('roles.index')->with('success','Rol editado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
