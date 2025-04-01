<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController; // Importar ClienteController
use App\Http\Controllers\ContactoController; // Importar ContactoController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí registramos las rutas para la aplicación web.
|
*/

// Ruta de bienvenida
Route::get('/', function () {
    return view('bienvenida');
})->name('home');

// Ruta de contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');



// Ruta para enviar el formulario de contacto
Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');
use App\Http\Controllers\PlanController; 



Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index'); // Listar clientes
Route::get('/clientes/crear', [ClienteController::class, 'create'])->name('clientes.create'); // Formulario de creación
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store'); // Guardar cliente