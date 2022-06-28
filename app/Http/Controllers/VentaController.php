<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente\Cliente;


class VentaController extends Controller
{
    public function index()
    { //  $clientes = Cliente::all();
       // $ventas = Venta::get();
        $clientes = Cliente::with('ventas')->get();
        //return view('ventas.index',compact('ventas','clientes'));
        return view('ventas.index',compact('clientes'));
    }
    public function pdf(){
     /*   $clientes = Cliente::all();
        $ventas = Venta::get();*/
        $clientes = Cliente::with('ventas')->get();
        return view('ventas.pdf',compact('clientes'));

    }
    public function show(Venta $venta)
    { $clientes = Cliente::all();
        return view('ventas.show',compact('venta','clientes'));
    }
}
