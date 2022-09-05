<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <h1>Home</h1>
     @auth
    <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estas logeado a la pagina</p>
    <p>
        <a href="/logout">Logout</a>
    </p>
     @endauth
    @guest
    <p>Hola, estas como invitado</p>
    <p>SI quires ver mas contenido, <a href="/login">Inicia Sesion</a></p>
    @endguest
</body>
</htmL>
