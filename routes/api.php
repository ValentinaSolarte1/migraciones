<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\ApiProductoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí se registran las rutas de la API.
|
*/

// Rutas de autenticación
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas por autenticación
Route::middleware('auth:api')->group(function () {

    // Rutas protegidas de Categorías
    Route::apiResource('categorias', ApiCategoriaController::class);

    // Rutas protegidas de Productos
    Route::apiResource('productos', ApiProductoController::class);
});
