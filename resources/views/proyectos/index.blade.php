<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Proyectos</title>
</head>
<body>
    <h1>Listado de Proyectos</h1>
    <a href="{{ route('proyectos.create') }}">Nuevo Proyecto</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <!-- Otros campos del proyecto -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $proyecto)
            <tr>
                <td>{{ $proyecto->id }}</td>
                <td>{{ $proyecto->nombre }}</td>
                <!-- Mostrar otros campos del proyecto -->
                <td>
                    <a href="{{ route('proyectos.show', $proyecto->id) }}">Ver</a>
                    <a href="{{ route('proyectos.edit', $proyecto->id) }}">Editar</a>
                    <!-- Agregar botón para eliminar si es necesario -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
