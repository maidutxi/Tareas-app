<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>

    
<table border="1">
    <thead>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Fecha límite</th>
            <th>Trabajador asignado</th>
            <th>Selecciona</th>
            <!--<th colspan="2">Acciones</th>-->
        </tr>
    </thead>
    <tbody>
        @foreach ($tareas as $tarea)
            <tr>
                <td>{{ $tarea->titulo }}</td>
                <td>{{ $tarea->descripcion }}</td>
                <td>{{ $tarea->fecha_limite }}</td>
                <td>
                    @if ($tarea->trabajador)
                        {{ $tarea->trabajador->nombre }} {{ $tarea->trabajador->apellido }}
                    @else
                        Sin asignar
                    @endif
                </td>
                <!--<td>
                    <form action="/tareas/update/{{ $tarea->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit">Actualizar tarea</button>
                    </form>
                </td>
                <td>
                    <form action="/tareas/delete/{{ $tarea->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar tarea</button>
                    </form>
                </td>-->
                <td>
                <form action="/tareas/edit/{{ $tarea->id }}" method="get" style="display:inline;">
                        @csrf
                        <button type="submit">Editar tarea</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    
    <a href="/tareas/create">Formulario para añadir tarea</a>
    

</body>
</html>
