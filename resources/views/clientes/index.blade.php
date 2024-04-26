<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
</head>
<body>
    <h1>Listado de Clientes</h1>
    <a href="{{ route('clientes.create') }}">Nuevo Cliente</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <!-- Otros campos del cliente -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <!-- Mostrar otros campos del cliente -->
                <td>
                    <a href="{{ route('clientes.show', $cliente->id) }}">Ver</a>
                    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                    <!-- Agregar botón para eliminar si es necesario -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
