<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Jugador;


class JugadorController extends Controller
{

    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores', compact('jugadores'));
    }

    public function crear()
    {
        return view('crear_jugador');
    }

    public function almacenar(Request $request)
    {
        Jugador::create($request->all());
        return redirect(route('jugadores.index'));
    }
}
