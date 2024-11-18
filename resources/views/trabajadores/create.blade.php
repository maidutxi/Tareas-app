<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
</head>
<body>
    <h1>Añadir trabajador</h1>
    <form action="/trabajadores/store" method="post">
        @csrf 
        @if($errors->any()) <!--si hay algun error listamelos del validate-->
            
            <ul>
                @foreach ($errors->all() as $error) 
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        <input type="text" name="nombre" placeholder="Nombre trabajador">
        <input type="text" name="apellido" placeholder="apellido trabajador">
        <input type="text" name="dni" placeholder="dni trabajador">
        <input type="submit" value="Añadir trabajador">
    </form>
</body>
</html>
