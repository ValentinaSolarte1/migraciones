@extends('layout')

@section('title', 'Contacto')

@section('content')
    <h1>Contacto</h1>
    <p>Envíanos un mensaje a través del formulario de contacto.</p>

    <form action="{{ route('contacto.enviar') }}" method="POST">
        @csrf

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
        </div>

        <button type="submit">Enviar</button>
    </form>
@endsection
