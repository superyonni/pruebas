<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cotizaciones</title>
</head>
<body>
    <h1>Listado de Cotizaciones</h1>
    <a href="{{ route('cotizaciones.create') }}">Nueva Cotización</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <!-- Otros campos de la cotización -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cotizaciones as $cotizacion)
            <tr>
                <td>{{ $cotizacion->id }}</td>
                <td>{{ $cotizacion->cliente }}</td>
                <!-- Mostrar otros campos de la cotización -->
                <td>
                    <a href="{{ route('cotizaciones.show', $cotizacion->id) }}">Ver</a>
                    <a href="{{ route('cotizaciones.edit', $cotizacion->id) }}">Editar</a>
                    <!-- Agregar botón para eliminar si es necesario -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
