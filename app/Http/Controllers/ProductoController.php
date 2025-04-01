<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // Faltaba el punto y coma
        return view('productos.index', compact('productos'));
    }
}

