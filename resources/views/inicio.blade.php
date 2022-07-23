<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('static/inicio.css') }}"/>
</head>
<body>
<form method="post" action="{{route("login")}}">
    @csrf
    <div>
        <label>Usuario</label>
        <input name="usuario"/>
    </div>
    <div>
        <label>Password</label>
        <input name="password"/>
    </div>
    <button>Enviar</button>
</form>

</body>
</html>
