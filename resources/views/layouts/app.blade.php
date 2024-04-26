<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Aquí puedes incluir tus estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <!-- Encabezado de la aplicación -->
        <h1>Encabezado de la Aplicación</h1>
    </header>

    <nav>
        <!-- Barra de navegación -->
        <ul>
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <!-- Agrega más enlaces de navegación según sea necesario -->
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Pie de página -->
        <p>&copy; {{ date('Y') }} Mi Aplicación</p>
    </footer>

    <!-- Aquí puedes incluir tus scripts JavaScript -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
