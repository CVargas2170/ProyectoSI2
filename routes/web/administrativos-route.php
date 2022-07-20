<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrativo\AdministrativoController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\Permiso\PermisoController;
use App\Models\Administrativo\Administrativo;
use JeroenNoten\LaravelAdminLte\Console\AdminLteInstallCommand;
use App\Models\Lista;

Route::prefix('administrativos')->name('administrativos.')->middleware(['auth'])->group(function(){

    Route::get('/',[AdministrativoController::class,'index'])->name('index');


    Route::get('/calzados',[AdministrativoController::class,'calzado'])->name('calzado');
    Route::get('/createcalzados',[AdministrativoController::class,'create1'])->name('create1');
    Route::post('/storecalzados',[AdministrativoController::class,'store1'])->name('store1');

    Route::get('/edit/{administrativo}',[AdministrativoController::class,'edit'])->name('edit');

    Route::get('/show/{administrativo}',[AdministrativoController::class,'show'])->name('show');

    Route::get('/create',[AdministrativoController::class,'create'])->name('create');

    Route::post('/store',[AdministrativoController::class,'store'])->name('store');

    Route::put('/update/{administrativo}',[AdministrativoController::class,'update'])->name('update');

    Route::delete('/delete',[AdministrativoController::class,'destroy'])->name('destroy');

    Route::get('/pdf',[AdministrativoController::class,'pdf'])->name('pdf');
   
    Route::post('/lista',[AdministrativoController::class,'lista'])->name('lista');
    Route::get('/clienteAsignados',[AdministrativoController::class,'asignados'])->name('asignados');


    Route::get('/mensajes/{cliente}',[AdministrativoController::class,'showMessage'])->name('viewMessages');

    Route::post('/sending',[AdministrativoController::class,'enviar'])->name('enviar');

    Route::get('/mesagges/General',[AdministrativoController::class,'enviarGeneral'])->name('masivos');

 
});








