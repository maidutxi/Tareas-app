<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Trabajador</title>
</head>
<body>
    <h1>Información del Trabajador</h1>
    <p><strong>Nombre:</strong> {{$trabajador->nombre}}</p>
    <p><strong>Apellido:</strong> {{$trabajador->apellido}}</p>
    <p><strong>DNI:</strong> {{$trabajador->dni}}</p>
    @foreach ($tareas as $tarea)
        <li>
            <strong>{{$tarea->titulo}} </strong>
        </li>
        <p>{{$tarea->descripcion}} </p>
        <p>{{$tarea->fecha_limite}}</p>
        @endforeach
    <a href="/trabajadores/index">Volver a la lista de trabajadores</a>
</body>
</html>
