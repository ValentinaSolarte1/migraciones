<?php

namespace App\Http\Controllers;

use App\Models\Categoria; // <- Asegúrate de importar el modelo
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all(); // Trae todas las categorías
        return view('categorias.index', compact('categorias'));
    }
}

