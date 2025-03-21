@extends('layout')

@section('title', 'Lista de Jugadores')

@section('content')
    <h1>Jugadores de Baloncesto</h1>
    <a href="{{  route('jugadores.crear') }}">Agregar Jugador</a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Posición</th>
            <th>Puntos por Partido</th>
        </tr>
        @foreach ($jugadores as $jugador)
            <tr>
                <td>{{ $jugador->nombre }}</td>
                <td>{{ $jugador->edad }}</td>
                <td>{{ $jugador->posicion }}</td>
                <td>{{ $jugador->puntos_por_partido }}</td>
            </tr>
        @endforeach
    </table>
@endsection
