<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear user</h1>
    <form action="{{route('users.store')}}"method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="date" name="fechaNacimiento" id="fechaNacimiento"><br>
        <button type="submit">Guardar</button>
    </form>

    <form action="{{route('users.index')}}" method="GET">
        <button type="submit">Volver</button>
    </form>
</body>
</html>