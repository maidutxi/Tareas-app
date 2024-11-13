<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar Tarea</h1>

    
    <form action="/tareas/update/{{ $tareas->id }}" method="POST">
        @csrf
        @method('PUT') 
        
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $tareas->titulo }}" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required>{{ $tareas->descripcion }}</textarea>

        <label for="fecha_limite">Fecha límite:</label>
        <input type="date" name="fecha_limite" id="fecha_limite" value="{{ $tareas->fecha_limite }}" required>

        <label for="trabajador_id">Trabajador asignado:</label>
        <select name="trabajador_id" id="trabajador_id">
            @foreach ($trabajadores as $trabajador)
                <option value="{{ $trabajador->id }}" {{ $tareas->trabajador_id == $trabajador->id ? 'selected' : '' }}>
                    {{ $trabajador->nombre }} {{ $trabajador->apellido }}
                </option>
            @endforeach
        </select><br> <br>

        <button type="submit">Actualizar tarea</button>
    </form><br>

    
    <form action="/tareas/delete/{{ $tareas->id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar tarea</button>
    </form><br><br>

    <a href="/tareas/create">Formulario para añadir tarea</a>
    <a href="/tareas/index">Volver a Lista Tareas</a>
</body>
</html>
