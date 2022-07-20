<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Venta\VentaController;
//use App\Http\Controllers\Cliente\ClienteController;




Route::prefix('ventas')->name('ventas.')->middleware(['auth'])->group(function(){

    Route::get('/',[VentaController::class,'index'])->name('index');//->middleware('can:verVentas');
    Route::get('/edit/{venta}',[VentaController::class,'edit'])->name('edit');//->middleware('can:ventas.edit');
    Route::get('/show/{venta}',[VentaController::class,'show'])->name('show');//->middleware('can:showVentas');
    Route::get('/create',[VentaController::class,'create'])->name('create');//->middleware('can:ventas.create');
    Route::put('/update/{venta}',[VentaController::class,'update'])->name('update');//->middleware('can:ventas.edit');
    Route::post('/store',[VentaController::class,'store'])->name('store');//->middleware('can:ventas.create');
    Route::delete('delete',[VentaController::class,'destroy'])->name('destroy');

 
});








