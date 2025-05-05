<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;




Route::get('/productos',[ProductoController::class,'index']) ->name('productos.index');

Route::get('/categorias', [CategoriaController::class, 'index']) ->name('categorias.index');
Route::get('/productos/create', [ProductoController::class,'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class,'store'])->name('productos.store');
