<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Auth::routes();
Route::get('/', function(){
    return view('index');
})->name('inicio');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('agregar/producto',[App\Http\Controllers\HomeController::class, 'agregar'])->name('agregar.producto');

//si se esta usando
Route::post('almacenar',[App\Http\Controllers\HomeController::class, 'almacenar'])->name('almacenar.producto');

Route::delete('products/{id}',[App\Http\Controllers\HomeController::class, 'eliminar'])->name('eliminar.producto');

Route::get('products/{id}/edit',[App\Http\Controllers\HomeController::class, 'editar'])->name('editar.producto');

Route::put('products/{id}',[App\Http\Controllers\HomeController::class, 'actualizar'])->name('actualizar.producto');