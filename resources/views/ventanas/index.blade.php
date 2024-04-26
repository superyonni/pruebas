<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ventanas</title>
</head>
<body>
    <h1>Listado de Ventanas</h1>
    <a href="{{ route('ventanas.create') }}">Nueva Ventana</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <!-- Otros campos de la ventana -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventanas as $ventana)
            <tr>
                <td>{{ $ventana->id }}</td>
                <td>{{ $ventana->tipo }}</td>
                <!-- Mostrar otros campos de la ventana -->
                <td>
                    <a href="{{ route('ventanas.show', $ventana->id) }}">Ver</a>
                    <a href="{{ route('ventanas.edit', $ventana->id) }}">Editar</a>
                    <!-- Agregar botón para eliminar si es necesario -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
