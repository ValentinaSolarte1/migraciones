<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Importar el modelo Producto

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // Obtener todos los productos
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');

    }
    public function store(Request $request)
{
    try {
        Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'stock'  => $request->stock
        ]);
        return redirect()->route('productos.index')->with('success','Registrado exitosamente');
    } catch (\Throwable $th) {
        // Se registra en el archivo de texto plano de logs de Laravel: storage\logs\laravel.log
        \Log::error('Error al crear producto: ' . $th->getMessage());
        return redirect()->route('productos.index')->with('error', 'Error al registrar');
    }
}
}
