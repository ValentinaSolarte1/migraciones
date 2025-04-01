<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gimnasio Fitness Pro')</title>

    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Estilos generales */
        body {
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* Encabezado */
        header {
            width: 100%;
            background: #007bff;
            padding: 15px 0;
            text-align: center;
        }

        header h1 {
            color: white;
            font-size: 24px;
        }

        /* Menú de navegación */
        nav ul {
            list-style: none;
            padding: 0;
            margin-top: 10px;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Contenedor principal */
        .container {
            width: 80%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Botón estilizado */
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Pie de página */
        footer {
            width: 100%;
            text-align: center;
            background: #222;
            color: white;
            padding: 10px 0;
            margin-top: auto;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Gimnasio Fitness Pro</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
                <li><a href="{{ route('planes.index') }}">Planes</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>© {{ date('Y') }} Gimnasio Fitness Pro. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
