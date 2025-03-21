@extends('layout')

@section('title', 'Agregar Jugador')

@section('content')
    <h1>Agregar Jugador</h1>
    <form action="{{route('jugadores.store') }}" method="POST">
        @csrf
        @method('post')
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>

        <label>Edad:</label>
        <input type="number" name="edad" required>
        <br>

        <label>Posición:</label>
        <input type="text" name="posicion" required>
        <br>

        <label>Puntos por Partido:</label>
        <input type="number" step="0.1" name="puntos_por_partido" required>
        <br>

        <button type="submit">Guardar</button>
    </form>
@endsection
