<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>Este sera el menu de navegación</div>
<div>
    <p>Nombre del usuario</p>
    <p>{{auth()->user()->nombre." ".auth()->user()->apellido}}</p>
</div>
<div>
    <p>Rol</p>
    <p>{{auth()->user()->cargo}}</p>
</div>
<div>Menu de opciones</div>
<ul>
    <li><a href="{{route("usuarios")}}">Usuarios</a></li>
    <li><a href="{{route("usuarios")}}">Habitacion</a></li>
    <li><a href="{{route("usuarios")}}">Mantenimiento</a></li>
    <li><a href="{{route("usuarios")}}">Reportes</a></li>
</ul>
@yield("contenido")
</body>
</html>
