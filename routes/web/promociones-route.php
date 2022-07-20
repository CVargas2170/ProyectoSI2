<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Cliente1Controller;
use App\Http\Controllers\Promocion\PromocionController;

Route::prefix('promociones')->name('promociones.')->middleware(['auth'])->group(function(){

    Route::get('/',[PromocionController::class,'index'])->name('index');

    Route::get('/edit/{promocion}',[PromocionController::class,'edit'])->name('edit');

    Route::get('/create',[PromocionController::class,'create'])->name('create');

    Route::get('/show/{promocion}',[PromocionController::class,'show'])->name('show');

    Route::put('/update/{promocion}',[PromocionController::class,'update'])->name('update');

    Route::post('/store',[PromocionController::class,'store'])->name('store');
    //Route::post('/store',[ClienteController::class,'store1'])->name('store1');
    Route::delete('/delete',[PromocionController::class,'destroy'])->name('destroy');

    Route::get('/loginregister',[Cliente1Controller::class,'index'])->name('loginregister');
});
