<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\piezasController;
use App\Http\Controllers\provedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return redirect()->route('home1');
});

Route::prefix("auth")->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('home','home')->name('home1');
        Route::get('tienda', 'tienda')->name('tienda1');
        Route::get('agregar', 'agregar')->name('agregar1');
        Route::get('provedor', 'provedor')->name('provedor1');
        Route::get('actualizarpieza/${id}', 'actualizar')->name('actualizar1');
        Route::get('actualizar/${id}', 'actualizarp')->name('actualizar2');
        Route::get('eliminarpieza/${id}', 'eliminar')->name('eliminar1');
        Route::get('eliminar/${id}', 'eliminarp')->name('eliminar2');
    });
});

Route::post('storepiezas',[piezasController::class,'store']);
Route::post('store',[provedorController::class,'store'])->name('store2');
Route::put('cambiarpieza/${id}',[piezasController::class,'cambiar'])->name('cambiar1');
Route::put('cambiar/${id}',[provedorController::class,'cambiar'])->name('cambiar2');
Route::delete('destroypieza/${id}',[piezasController::class,'destroy'])->name('destroy1');
Route::delete('destroy/${id}',[provedorController::class,'destroy'])->name('destroy2');
