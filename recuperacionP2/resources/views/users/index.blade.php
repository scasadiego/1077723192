<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" {{ route('users.create')}}" method="GET">
        @csrf
        <button type="submit">Crear nuevo</button>
    </form>

    @foreach($users as $user)
        <p>{{user->name}} - {{user->email}}</p>
        
        <form action="{{route('users.show',$user->id)}}" method="GET">
            <button type="submit">Ver</button>
        </form>

        <form action="{{route('users.edit',$user->id)}}" method="GET">
            <button type="submit">Editar</button>
        </form>
    @endforeach
</body>
</html>