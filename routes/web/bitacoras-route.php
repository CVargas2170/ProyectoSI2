<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bitacora\BitacoraController;


Route::prefix('bitacora')->name('bitacoras.')->middleware(['auth'])->group(function(){

        Route::get('/bitacora',[BitacoraController::class,'index'])->name('index');

        Route::get('/create',[BitacoraController::class,'create'])->name('create');

        Route::get('/edit/{bitacora}',[BitacoraController::class,'edit'])->name('edit');

        Route::get('/show/{user}',[BitacoraController::class,'show'])->name('show');

        Route::post('/store',[BitacoraController::class,'store'])->name('store');

        Route::put('/update/{bitacora}',[BitacoraController::class,'update'])->name('update');

        Route::delete('/delete',[BitacoraController::class,'destroy'])->name('destroy');

});