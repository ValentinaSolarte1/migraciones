@extends('layout')

@section('title','categorías')

@section('content')
<h1>Categorías disponibles</h1>

<ul>
    @foreach($categorias as $categoria)
    <li style="margin-bottom: 20px;">
        <p><strong>Nombre:</strong> {{ $categoria->nombre }}</p>
    </li>
    <li>
        <p><strong>Descripción:</strong> {{ $categoria->descripcion }}</p>
    </li>
    @endforeach
</ul>
@endsection
