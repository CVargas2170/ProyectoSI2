<?php

use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Cliente1Controller;
use App\Http\Controllers\PromocionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//PRINCIPAL-LOGIN-REGISTER
/*Route::get('/',function(){
    return view('tienda.home');
})->name('tienda');*/


//Route::get('/',[Cliente1Controller::class,'catalogo'])->name('tienda');

//PRINCIPAL
Route::get('/',[Cliente1Controller::class,'catalogo'])->name('tienda');
Route::get('registro',[Cliente1Controller::class,'index'])->name('registro');

Route::get('perfil',[Cliente1Controller::class,'perfil'])->name('perfil');

Route::get('Promociones',[PromocionController::class,'index'])->name('Inicio1');

Route::get('/LoginAdmin', function () {
    return view('auth.login');
});

/*Route::get('/', function () {


    return view('auth.login');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//TIENDA
//PRINCIPAL

//PRINCIPAL-VARONES
Route::get('/hombres',[Cliente1Controller::class,'ListarCalzadosHombres'])->name('catalogoHombres');

//PRINCIPAL-MUJERES
Route::get('/mujeres',[Cliente1Controller::class,'ListarCalzadosMujeres'])->name('catalogoMujeres');

//DETALLE CALZADO
Route::get('/detalle/{id}/{carpeta}',[Cliente1Controller::class,'ListarCalzado'])->name('listarcalzado');

Route::get('/home',function(){
    return view('tienda.home');
});
Route::post('/store',[ClienteController::class,'store2'])->name('store2');
Route::get('/base' ,function(){return view('tienda.login.conexion');});
Route::post('/Sesión-Iniciada',[ClienteController::class,'loginCliente1'])->name('loguear');
Route::get('/salir',[ClienteController::class,'SalirCliente'])->name('salir');

Route::POST('/carrito',[CarritoController::class,'compra'])->name('compra');
//Route::post('/carrito/{arreglo}',[CarritoController::class,'compra'])->name('compra');

//Ventas
Route::get('/ventas',[VentaController::class,'index'])->name('ventas');
Route::get('/show/{venta}',[VentaController::class,'show'])->name('show');
Route::get('/pdf',[VentaController::class,'pdf'])->name('pdf');
